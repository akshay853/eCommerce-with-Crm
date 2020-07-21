<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usrlogin
 *
 * @author Nivya K
 */
class login_model extends CI_Model
{
      function __construct() 
    {
      parent::__construct();
  }
  function check_user($data)
  {
    // print_r($data);die('inside model');
      $insertdata=array();
  
      $this->db->select("*");
      $this->db->from("user_register");
      $this->db->where("username",$data["user_name"]);
      $this->db->where("password",$data["user_password"]);
      $query=$this->db->get();
      $resultarray=$query->result_array(); //print_r($resultarray);die();
      if($resultarray)
      {
          return "YES";
      }
      else         
      {
       return "NO";   
      }
       
      
  }
  function check_seller($data)
  {
      $this->db->select("*");
      $this->db->from("seller_register");
        $this->db->where("username",$data["username"]);
      $this->db->where("password",$data["password"]);
      $query=$this->db->get();
      $resultarray=$query->result_array(); 
      if($resultarray)
      {
          return "YES";
      }
      else         
      {
       return "NO";   
      }
  }   
      function check_staff($data)
  {
      $this->db->select("*");
      $this->db->from("staff_register");
      $this->db->where("username",$data["username"]);
      $this->db->where("password",$data["password"]);
      $query=$this->db->get();
      $resultarray=$query->result_array();
      if($resultarray)
      {
          return "YES";
      }
      else         
      {
       return "NO";   
      } 
  }
      
}