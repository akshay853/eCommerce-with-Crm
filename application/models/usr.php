<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usr
 *
 * @author Nivya K
 */
class Usr extends CI_Model
{
     function __construct() {
      parent::__construct();
  }
  function reg($abb)
  {
      print_r($abb);
    
      
      $insertdata=array();
      $this->db->insert("user_register",$abb);
  }
  function get_user_profile($username)
  {
       $this->db->select("*");
      $this->db->from("user_register");
      $this->db->where("username",$username);
      $query=$this->db->get();
      $resultarray=$query->result_array();
      
      $dataarray=array();
      foreach($resultarray as $row)
      {
          $dataarray=$row;
      }
      //print_r($dataarray);die();
      return $dataarray;
  }
  function  get_staff_profile($username)
     {
     // print_r($username);
      $this->db->select("*");
      $this->db->from("staff_register");
      $this->db->where("username",$username);
      $query=$this->db->get();
      $resultarray=$query->result_array();
     
      $dataarray=array();
      foreach ($resultarray as $row)
      {
          $dataarray=$row;
      }
      return $dataarray;
     }
     function get_seller_profile($username)
     {
           $this->db->select("*");
      $this->db->from("seller_register");
      $this->db->where("username",$username);
      $query=$this->db->get();
      $resultarray=$query->result_array();
      
      $dataarray=array();
      foreach($resultarray as $row)
      {
          $dataarray=$row;
      }
      //print_r($dataarray);die();
      return $dataarray;
         
     }
     public function forget($email)
     {
        
         $this->db->select("*");
         $this->db->from("user_register");
         $this->db->where("email",$email);
         $query= $this->db->get();
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
      public function seller_forget($email)
     {
        
         $this->db->select("*");
         $this->db->from("seller_register");
         $this->db->where("email",$email);
         $query= $this->db->get();
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
  public function staff_forget($email)
     {
        
         $this->db->select("*");
         $this->db->from("staff_register");
         $this->db->where("email",$email);
         $query= $this->db->get();
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
     
   


   

