<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of seller_registers
 *
 * @author Nivya K
 */
class registration extends CI_Model 
{
     function __construct() 
    {
         
      parent::__construct();
     }
     function seller_reg($data)
     {
         // print_r($data);
       // $data=array();
        $this->db->insert("seller_register",$data);
    }
 function staff_reg($data)
    {
      // print_r($data);
       // $data=array();
        $this->db->insert("staff_register",$data);
    }
 public function reg($data)
  {
     // $insertdata=array();
     
      
    $this->db->insert("user_register",$data);
   
  }
  
  public function getSellerIdFromUsername($username)
  {
        $this->db->select("seller_id");
        $this->db->from("seller_register");
        $this->db->where("username",$username);
        $query=$this->db->get();
        $resultarray=$query->result_array(); 
        return $resultarray[0]['seller_id'];
      
  }


    public function getUserIdFromUsername($username)
    {
        $this->db->select("user_id");
        $this->db->from("user_register");
        $this->db->where("username",$username);
        $query=$this->db->get();
        $resultarray=$query->result_array();
        return $resultarray[0]['user_id'];

    }
    public function getUsernameFromId($id)
    {
        $this->db->select("username");
        $this->db->from("user_register");
        $this->db->where("user_id",$id);
        $query=$this->db->get();
        $resultarray=$query->result_array();
        return $resultarray[0]['username'];

    }

    public function get_user_history($user_id)
    {
        $username=$this->getUsernameFromId($user_id);
        $this->db->select("*");
        $this->db->from("user_history");
        $this->db->where("username",$username);
        $query=$this->db->get();
        $resultarray=$query->result_array();
        return $resultarray;
    }

  public function get_all_users()
  {
       $this->db->select("firstname,secondname,user_id");
        $this->db->from("user_register");
        $query=$this->db->get();
        $resultarray=$query->result_array(); 
        return $resultarray;
  }


    function get_user_profile_from_id($username='')
    {

        $userid = $this->getUserIdFromUsername($username);
        $this->db->select("*");
        $this->db->from("user_register");
        $this->db->where("user_id",$userid);
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

  function get_user_profile($userid)
  {
      $this->db->select("*");
      $this->db->from("user_register");
      $this->db->where("user_id",$userid);
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
  public function get_lead_profile($userid)
  {
      
      $this->db->select("*");
      $this->db->from("lead");
      $this->db->where("contact",$userid);
      $query=$this->db->get();
      $resultarray=$query->result_array();
      
      $dataarray=array();
      foreach($resultarray as $row)
      {
          $row['contact_name'] = $this->getContactName($row['contact']);
          $dataarray[]=$row;
      }
      //print_r($dataarray);die();
      return $dataarray;
  }
   public function getContactName($id)
     {
        $this->db->select("firstname,secondname");
        $this->db->from("user_register");
        $this->db->where('user_id',$id);
        $query=$this->db->get();
        $resultarray=$query->result_array();
        return $resultarray[0]['firstname']." ".$resultarray[0]['secondname'];
        
     }


    public function get_all_staff()
    {
        $this->db->select("*");
        $this->db->from("staff_register");
        $query=$this->db->get();
        $resultarray=$query->result_array();
        return $resultarray;
    }

    public function get_all_seller()
    {
        $this->db->select("*");
        $this->db->from("seller_register");
        $query=$this->db->get();
        $resultarray=$query->result_array();
        return $resultarray;
    }
    public function get_all_customer()
    {
        $this->db->select("*");
        $this->db->from("user_register");
        $query=$this->db->get();
        $resultarray=$query->result_array();
        return $resultarray;
    }
    public function get_all_feedback()
    {
        $this->db->select("*");
        $this->db->from("feedback");
        $query=$this->db->get();
        $resultarray=$query->result_array();
        return $resultarray;
    }
    public function get_all_staff_feedback()
    {
        $result = $this->db->query("SELECT * FROM feedback where username IN(SELECT username FROM user_register)");
        $resultarray = $result->result_array();
        return $resultarray;
    }




     }

