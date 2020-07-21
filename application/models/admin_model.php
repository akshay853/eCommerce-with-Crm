<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author dell
 */
class Admin_model extends CI_Model
{
   public function admin_get($data)
   {
     
  
      //print_r($data);
     
  
      $this->db->select("*");
      $this->db->from("admin");
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

