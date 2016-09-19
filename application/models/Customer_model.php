<?php
/**
 * Copyright (c) 2016.
 */

/**
 * Created by IntelliJ IDEA.
 * User: tosandeepa
 * Date: 1/28/16
 * Time: 4:50 PM
 */
class Customer_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_customer($id)
    {
        $this->db->from('customer');
        $this->db->where('CusID', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result()[0];
        } else {
            return null;
        }
    }

    public function save(Customer $customer){
        //var_dump($customer);
        $data_journal = array(
            'CusID' => $customer->getCusID(),
            'FirstName' => urlencode($customer->getFirstName()),
            'LastName' => $customer->getLastName(),
            'Address1' => $customer->getAddress1(),
            'Address2' => urlencode($customer->getAddress2()),
            'City' => urlencode($customer->getCity()),
            'PostalCode' => urlencode($customer->getpostalcode()),
            'Country' => $customer->getCountry(),
            'Phone' => $customer->getMobile(),
            'Email' => $customer->getEmail(),
            'CreditCard' => $customer->getCreditCard(),
            'CreditCardTypeID' => $customer->getCreditCardTypeID(),
            'CardExpMo' => $customer->getCreditCardExpmonth(),
            'CardExpYr' => $customer->getCreditCardExpYear(),
            'DateEntered' => $customer->getcreditcardentereddate(),
            'Title' => $customer->getTitle()

        );
        $this->db->insert('customer', $data_journal);
    }

}