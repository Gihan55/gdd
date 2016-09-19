<?php
/**
 * Copyright (c) 2016.
 */

/**
 * Created by IntelliJ IDEA.
 * User: tosandeepa
 * Date: 1/28/16
 * Time: 11:49 AM
 */
class Customer
{
    protected $CI;
    private $CUSid = null, $fname = null, $lname = null, $email = null, $mobile = null, $address1 = null, $address2 = null, $city = null, $postalcode = null, $country = null, $CreditCard= null, $CreditCardTypeID = null, $CardExpMo = null, $CardExpYr = null, $Password = null, $DateEntered = null, $Title=null;

    public function __construct($CUSid = null)
    {
        if ($CUSid != null) {
            $this->CI =& get_instance();
            $this->CI->load->model('Customer_model');
            $customer_data = $this->CI->customer_model->get_customer($CUSid);
            //var_dump($customer_data);
            if ($customer_data != null) {
                $this->CUSid = $CUSid;
                $this->fname = urldecode($customer_data->fname);
                $this->lname = $customer_data->lname;
                $this->email = $customer_data->email;
                $this->mobile = urldecode($customer_data->mobile);
                $this->address1 = urldecode($customer_data->address1);
                $this->address2 = urldecode($customer_data->address2);
                $this->city = $customer_data->city;
                $this->postalcode = $customer_data->postalcode;
                $this->country = $customer_data->country;
                $this->CreditCard = $customer_data->CreditCard;
                $this->CreditCardTypeID = $customer_data->CreditCardTypeID;
                $this->CardExpMo = $customer_data->CardExpMo;
                $this->CardExpYr = $customer_data->CardExpYr;
                $this->Password = $customer_data->Password;
                $this->DateEntered = $customer_data->DateEntered;
                $this->Title = $customer_data->Title;
            }
        }
        unset($this->CI);
    }

    public function getCusID()
    {
        return $this->CUSid;
    }
    public function setCusID($CUSid)
    {
        $this->CUSid = $CUSid;
        return $this;
    }
    public function getFirstName()
    {
        return $this->fname;
    }

    public function setFirstName($fname)
    {
        $this->fname = $fname;
        return $this;
    }

    public function getLastName()
    {
        return $this->lname;
    }

    public function setLastName($lname)
    {
        $this->lname = $lname;
        return $this;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function setAddress1($address1)
    {
        $this->address1 = $address1;
        return $this;
    }
    public function getAddress1()
    {
        return $this->address1;
    }
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
        return $this;
    }
    public function getaddress2()
    {
        return $this->address2;
    }
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }
    public function getCountry()
    {
        return $this->country;
    }
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;
        return $this;
    }
    public function getpostalcode()
    {
        return $this->email;
    }
    public function setCreditCardExpmonth($CardExpMo)
    {
        $this->CardExpMo = $CardExpMo;
        return $this;
    }
    public function getCreditCardExpmonth()
    {
        return $this->CardExpMo;
    }
    public function setCreditCardExpYear($CardExpYr)
    {
        $this->CardExpYr = $CardExpYr;
        return $this;
    }
    public function getCreditCardExpYear()
    {
        return $this->CardExpYr;
    }
    public function setcreditcardentereddate($DateEntered)
    {
        $this->DateEntered = $DateEntered;
        return $this;
    }
    public function getcreditcardentereddate()
    {
        return $this->DateEntered;
    }
    public function setCreditCard($CreditCard)
    {
        $this->CreditCard = $CreditCard;
        return $this;
    }
    public function getCreditCard()
    {
        return $this->CreditCard;
    }
    public function setCreditCardTypeID($CreditCardTypeID)
    {
        $this->CreditCardTypeID = $CreditCardTypeID;
        return $this;
    }
    public function getCreditCardTypeID()
    {
        return $this->CreditCardTypeID;
    }
    public function SetTitle($Title)
    {
        $this->Title = $Title;
        return $this;
    }
    public function getTitle()
    {
        return $this->Title;
    }
    public function save()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('Customer_model');

        return $this->CI->Customer_model->save($this);
    }

}