<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of register
 *
 * @author Nivya K
 */
class Register extends CI_Controller
{
    
    public function user_register()
    {
        $this->load->view("dashboard/user_register");
        //$this->load->view("user_register");
    }
        function user_registration()
    {
        
        $add = $this->input->post();
        $this->load->model("registration");
        $this->registration->reg($add);
        redirect("login/user_login");
    }
    public function staff_register()
    {
         $this->load->view("dashboard/staff_register");
        //$this->load->view("staff_register");
    }
     public function staff_registration()
   {
       $insertdata=$this->input->post();
       print_r($insertdata);
       unset($insertdata['conform_password']);
       $this->load->model("registration");
       $this->registration->staff_reg($insertdata);
       redirect("login/staff_login");
   }
   public function seller_register()
   {
       $this->load->view("dashboard/seller_register");
       //$this->load->view("seller_register");
   }
   public function seller_registration()
  {
      $insertdata=$this->input->post();
      print_r($insertdata);
      unset($insertdata['conform_password']);
      $this->load->model("registration");
      $this->registration->seller_reg($insertdata);
      redirect("login/seller_login");      
  }
}
