<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author Nivya K
 */
class User extends CI_Controller
{
    public function view_profile()
    {
      
     if(!$this->session->userdata("username"))
        {
           redirect("login/user_login"); 
        }
        $this->load->model('usr');
        $username=$this->session->userdata("username");
        $profiledata=$this->usr->get_user_profile($username);
        $data['user_profile_data']=$profiledata;
     // $this->load->view("shop/shop_session_header",$data);
          $this->load->view("shop/shop_session_header",$data);
          $this->load->view("shop/user_profile",$data);
          $this->load->view("shop/shop_session_footer",$data);
    }
    public function edit_profile()
    {
       $this->load->model('usr');
       $username= $this->session->userdata("username");
       $profiledata=$this->usr->get_user_profile($username);
       $data['user_profile_data']=$profiledata;

        $this->load->view("shop/shop_session_header",$data);
        $this->load->view("shop/user_profile_edit",$data);
        $this->load->view("shop/shop_session_footer",$data);

       
        
          
    }
    public function edit_profile_action()
    {
        //die('dsdss');
         $add = $this->input->post();
    //   print_r($add);die();
        $this->load->model("profile_edit");
        $username=$this->session->userdata("username");
        $this->profile_edit->update_user_profile($add,$username);
        redirect("user/view_profile");
    }
    public function home()
    {
        if(!$this->session->userdata("username"))
        {
           redirect("login/user_login"); 
        }
      
             $this->load->model("product_model");
             //$username= $this->session->userdata("productname");
         $arr=$this->product_model->view_all_products();    
         $data['all_product']=$arr;          
         $this->load->view("userhome",$data);
    }
    public function user_forget_password()
    {
        $this->load->view("user_forget_password");
    }
    public function forget_password_setting()
    {
       $arr=$this->input->post();
       $this->load->model("usr");
       $returnval = $this->usr->forget($arr['email']);
       if($returnval == "YES")
       {
           $this->sendPasswordResetMail(); 
          echo "A Password reset mail send to your email account";   
       }
      else
       {
           echo "NO such email is registered with us";
       }
    }
    public function sendPasswordResetMail()
    {
        echo "Message sent success";
    }
    public function user_product_page()
    {
        
        
       // $this->load->view('')
    }
    public function checkout()
    {
        
          $this->load->view("shop/shop_header");
          $this->load->view("shop/checkout");
          $this->load->view("shop/shop_session_footer");
    }

    public function my_purchases()
    {
        $this->load->model("product_model");
        $productdata=$this->product_model->get_all_orders_of_customer($this->session->userdata('login_username'));//print_R($productdata);die();
        $data['all_orders']=$productdata;

        $this->load->view("shop/shop_session_header",$data);
        $this->load->view("shop/my_purchases",$data);
        $this->load->view("shop/shop_session_footer",$data);
    }

    public function add_to_history($action,$product,$status)
    {
        $this->load->model("product_model");
        $this->product_model->add_to_history($this->session->userdata("username"),$action,$product,$status);

    }
       
    
    
   
}  

