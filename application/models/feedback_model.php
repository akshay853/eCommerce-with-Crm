<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of feedback
 *
 * @author Nivya K
 */
class feedback_model extends CI_Model
{
    function __construct() 
    {
         
      parent::__construct();
     }
     function add_customer_feedback($data)
     {
          //print_r($data);
       // $data=array();
        return $this->db->insert("feedback",$data);
    } 
    
     function add_seller_feedback($data)
     {
         // print_r($data); die();
       // $data=array();
        return $this->db->insert("feedback",$data);
    } 
     function add_staff_feedback($data)
     {
          print_r($data);
       // $data=array();
        return $this->db->insert("staff_feedback",$data);
    }
}
