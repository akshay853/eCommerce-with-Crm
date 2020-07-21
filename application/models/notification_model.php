<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of notification_model
 *
 * @author Nivya K
 */
class notification_model extends CI_Model
{
    function __construct() 
    {
         
      parent::__construct();
     }
     function add_notification($data)
     {
          //print_r($data);
       // $data=array();
        return $this->db->insert("notification",$data);
    } 
   
}
