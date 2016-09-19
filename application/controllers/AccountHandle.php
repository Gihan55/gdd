<?php
/**
 * Created by PhpStorm.
 * User: tosan
 * Date: 9/13/2016
 * Time: 4:26 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountHandle extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->USER_OBJ = $this->session->userdata('user');
        $this->load->model('Customer');
    }
    public function index()
    {
        $this->load->view('welcome');
    }
    public function create_account()
    {
        $this->load->view('account_create');
    }

    public function new_account()
    {
        $submit = $this->input->post('submit');
        if (isset($submit)) {
            $Customer = new Customer();
            $Customer_id = $Customer
                ->SetTitle($this->input->post('Title'))
                ->setFirstName($this->input->post('fname'))
                ->setLastName($this->input->post('lname'))
                ->setEmail($this->input->post('email'))
                ->setMobile($this->input->post('mobile'))
                ->setAddress1($this->input->post('address1'))
                ->setAddress2($this->input->post('address2'))
                ->setCity($this->input->post('city'))
                ->setCountry($this->input->post('country'))
                ->setCreditCardExpmonth($this->input->post('creditcardexpmonth'))
                ->setCreditCardExpYear($this->input->post('creditcardexpyear'))
                ->setcreditcardentereddate($this->input->post('creditcardentereddate'))
                ->setPostalcode($this->input->post('postalcode'))
                ->setCreditCard($this->input->post('creditcard'))
                ->setCreditCardTypeID(intval($this->input->post('creditcardtype')))
                ->save();
            if ($Customer_id > 0) {
                $this->customer(true);
            } else {
                $this->dashboard();
            }
        } else {
            $this->dashboard();
        }
    }

    public function dashboard()
    {
        switch ($this->ua->check_login()) {
            case "customer":
                $this->customer_dashboard();
                break;
            case "":
                $this->site_dashboard();
                break;
            default:
                $this->load->view('401');
        }
    }


    private function customer_dashboard()
    {
        $this->load->view('welcome_customer');
    }

    private function site_dashboard()
    {
        $this->load->view('site');
    }

    public function signin(){
        $this->load->model('user');
        $this->load->view('login');
    }

    // Login & Logout
    public function login()
    {
        $this->load->model('User');

        $user_obj = $this->session->userdata('user');

        if ($user_obj != false) {
            redirect('/dashboard');
        } else {
            $email = $this->input->post('Username');
            $pass = $this->input->post('Password');
            $ip = $this->input->server('REMOTE_ADDR');

            $pass = sha1($pass);

            $user = $this->User->get_pass($email);
            var_dump($pass);
            if (!is_null($user)) {
                if ($user->Password === $pass) {
                    $this->session->set_userdata("user", $user);

                    $this->User->loginLogSave($user->CusID, $ip);
                    redirect('/dashboard');
                }else {
                    $error = array('error' => "Password is incorrect!");
                    $this->load->view('login', $error);
                }
            }else{
                $error = array('error' => "E-mail is wrong!");
                $this->load->view('login', $error);
            }
        }
    }

    public function logOut()
    {
        $this->session->sess_destroy();
        redirect('/');
    }


}
