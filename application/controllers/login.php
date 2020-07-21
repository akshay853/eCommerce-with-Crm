<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of seller_profile
 *
 * @author Nivya K
 */
class Login extends CI_Controller
{
    public function user_login($redirect = '')
    {
        $data['redirect'] = '';
        if ($redirect) {
            $redirect_contents = explode('-', $redirect);
            //  print_r($redirect_contents);die();
            $data['redirect'] = $redirect_contents[1];
        }
        // print_r($data);die();
        $this->load->view("dashboard/login", $data);

    }

    public function login_action()
    {  //die('here');

        $add = $this->input->post();
        $this->load->model("login_model");
        $retur = $this->login_model->check_user($add);
        if ($retur == "YES") {
            $this->session->set_userdata("username", $add['user_name']);
            if (isset($add['redirect'])) {  //die('redirect');
                redirect(base_url('cart/place_order'));
            }
            // die('normal');
            redirect(base_url());
        } else {
            redirect("login/user_login");

        }
    }

    public function logout()
    {
        $this->session->unset_userdata("username");
        //redirect("login/user_login");
        redirect(base_url());
    }

    public function seller_login()
    {
         //$this->load->view("seller_login");
        $this->load->view("dashboard/seller_login");
    }

    public function seller_login_action()
    {
        $data = $this->input->post();
        $this->load->model("login_model");
        $retur = $this->login_model->check_seller($data);
        if ($retur == "YES") {
            $this->session->set_userdata("seller_username", $data["username"]);
            redirect("seller/seller_home");
        } else {
            redirect("login/seller_login");
        }


    }

    public function seller_logout()
    {
        $this->session->unset_userdata("seller_username");
        // redirect("login/seller_login");
        redirect(base_url());
    }

    public function staff_login()
    {
        // $this->load->view("staff_login");
        $this->load->view("dashboard/staff_login");
    }

    public function staff_login_action()
    {
        $data = $this->input->POST();
        $this->load->model("login_model");
        $retur = $this->login_model->check_staff($data);
        if ($retur == "YES") {
            $this->session->set_userdata("staff_username", $data["username"]);
            redirect("staff/view_profile");
        } else {
            redirect("login/staff_login");
        }

    }

    public function staff_logout()
    {
        $this->session->unset_userdata("staff_username");
        redirect("login/staff_login");
    }

    public function crm_login()
    {
        $this->load->view("dashboard/dashboard_header");
        $this->load->view("dashboard/dashboard_main");
        $this->load->view("dashboard/dashboard_footer");
    }

    public function admin_logout()
    {
        $this->session->unset_userdata("admin_username");
        redirect(base_url());
    }
}


