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
class Admin  extends CI_Controller
{
    public function adminlogin()
    {
    //$this->load->view("admin_login");
         $this->load->view("dashboard/admin_login");
    }
    public function test()
    {
       print_r($_SESSION);die(); 
    }    
    public function admin_login_setup()
    {
        $data=$this->input->post();
        $this->load->model("admin_model");
        $retur=$this->admin_model->admin_get($data);
        if($retur=="YES")
        {
            $this->session->set_userdata("admin_username",$data['username']);
            redirect("admin/feedbacks");
        }
        else
        {
            redirect("admin/adminlogin");
            
        }
    }
    public function admin_home()
    { $this->login_check();
       // $this->load->view("admin_home");
        $this->load->view("dashboard/admin/admin_dashboard_header");
               $this->load->view("dashboard/admin/admin_dashboard_main");
                      $this->load->view("dashboard/admin/admin_dashboard_footer");
    }
    public function add_notification()
    { $this->login_check();
         $this->load->view("dashboard/admin/admin_dashboard_header");
               $this->load->view("dashboard/admin/admin_dashboard_notification");
                      $this->load->view("dashboard/admin/admin_dashboard_footer");
    }
     public function notification_action()
      {        
        $add = $this->input->post();
        $this->load->model("notification_model");
        $rtn = $this->notification_model->add_notification($add);
        if($rtn)
        {
            redirect(base_url('admin/home'));
        }
    }

    public function staff()
    { $this->login_check();

        $this->load->model('registration');
        $staff = $this->registration->get_all_staff();

        $data['all_staff'] = $staff;

        $this->load->view("dashboard/admin/admin_dashboard_header",$data);
        $this->load->view("dashboard/admin/staff",$data);
        $this->load->view("dashboard/admin/admin_dashboard_footer",$data);
    }
    public function customer()
    { $this->login_check();

        $this->load->model('registration');
        $staff = $this->registration->get_all_customer();

        $data['all_cust'] = $staff;

        $this->load->view("dashboard/admin/admin_dashboard_header",$data);
        $this->load->view("dashboard/admin/customer",$data);
        $this->load->view("dashboard/admin/admin_dashboard_footer",$data);
    }
    public function seller()
    { $this->login_check();

        $this->load->model('registration');
        $staff = $this->registration->get_all_seller();

        $data['all_sell'] = $staff;

        $this->load->view("dashboard/admin/admin_dashboard_header",$data);
        $this->load->view("dashboard/admin/seller",$data);
        $this->load->view("dashboard/admin/admin_dashboard_footer",$data);
    }
    public function feedbacks()
    {

 $this->login_check();

        $this->load->model('registration');
        $staff = $this->registration->get_all_feedback();
        //$staff1 = $this->session->$staff('username');
        $data['all_feed'] = $staff;

        $this->load->view("dashboard/admin/admin_dashboard_header",$data);
        $this->load->view("dashboard/admin/feedbacks",$data);
        $this->load->view("dashboard/admin/admin_dashboard_footer",$data);
    }

    public function login_check()
    {
        if(!$this->session->userdata('admin_username'))
        {
            redirect(base_url('admin/adminlogin'));
        }
    }

        
    }

