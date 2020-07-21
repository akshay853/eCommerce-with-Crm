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
class Seller extends CI_Controller
{
    public function view_profile()
    {


        if (!$this->session->userdata("seller_username")) {
            redirect("login/seller_login");
        }
        $this->load->model("product_model");
        $productdata = $this->product_model->get_all_orders();//print_R($productdata);die();
        $data['all_orders'] = $productdata;

        $this->load->model('usr');
        $username = $this->session->userdata("seller_username");
        $profiledata = $this->usr->get_seller_profile($username);

        $data['seller_profile_data'] = $profiledata;

        $this->load->view("dashboard/seller/seller_dashboard_header", $data);
        $this->load->view("dashboard/seller/seller_profile", $data);
        $this->load->view("dashboard/seller/seller_dashboard_footer", $data);

    }

    public function edit_profile()
    {
        $this->load->model('usr');
        $username = $this->session->userdata("seller_username");
        $profiledata = $this->usr->get_seller_profile($username);

        $data['seller_profile_data'] = $profiledata;
        $this->load->view("dashboard/seller/seller_dashboard_header", $data);
        $this->load->view('dashboard/seller/seller_profile_edit', $data);
        $this->load->view("dashboard/seller/seller_dashboard_footer", $data);
    }

    public function edit_profile_action()
    {
        $insertdata = $this->input->post();

        $this->load->library('upload');
        if (!$this->upload->do_upload('image')) {
            $upload_error = array('error' => $this->upload->display_errors());
            $data['upload_error'] = $upload_error['error'];
            $this->load->model('usr');
            $username = $this->session->userdata("seller_username");
            $profiledata = $this->usr->get_seller_profile($username);
            $data['seller_profile_data'] = $profiledata;
            $this->load->view("dashboard/seller/seller_dashboard_header", $data);
            $this->load->view('dashboard/seller/seller_profile_edit', $data);
            $this->load->view("dashboard/seller/seller_dashboard_footer", $data);
        } else {
            $upload_data = $this->upload->data();      //   print_r($upload_data);         die();
            $data['success_msg'] = '<div class="alert alert-success text-center"> your file ' . $upload_data['file_name'] . 'was successfully upload';

            $insertdata['sellerimage'] = $upload_data['file_name'];


            $this->load->model("profile_edit");
            $username = $this->session->userdata("seller_username");
            $this->profile_edit->update_seller_profile($insertdata, $username);
            redirect("seller/view_profile");
        }
    }

    public function seller_my_product()
    {
        $this->load->model('registration');
        $seller_id = $this->registration->getSellerIdFromUsername($this->session->userdata('seller_username'));
        //echo $seller_id;die();
        $this->load->model('product_model');
        $arr = $this->product_model->view_all_products($seller_id);
        $data['all_product'] = $arr;  //print_r($arr);die();
        $this->load->view("dashboard/seller/seller_dashboard_header", $data);
        $this->load->view("dashboard/seller/seller_my_products", $data);
        $this->load->view("dashboard/seller/seller_dashboard_footer", $data);
    }

    public function seller_home()
    {
        if (!$this->session->userdata("seller_username")) {
            redirect("login/seller_login");
        }

        //$this->load->view("sellerhome");
        $this->load->view("dashboard/seller/seller_dashboard_header");
        $this->load->view("dashboard/seller/seller_dashboard_main");
        $this->load->view("dashboard/seller/seller_dashboard_footer");
    }

    public function product_manage()
    {
        $this->load->model("product_model");
        $arr = $this->product_model->get_all_products();
        //   print_r($arr);die();


        $data['all_product_data'] = $arr;
        $this->load->view("product_manage", $data);

    }

    public function product_edit($product_id)
    {
        $this->load->model('product_model');

        $product_data = $this->product_model->get_product_based_on_id($product_id);

        $data['product_data'] = $product_data;
        $data['selected_product_id'] = $product_id;
        $this->load->view('seller_product_edit', $data);

    }



    public function seller_forget_password()
    {
        $this->load->view("seller_forget_password");
    }

    public function forget_password_setting()
    {
        $arr = $this->input->post();
        $this->load->model("usr");
        $returnval = $this->usr->seller_forget($arr['email']);
        if ($returnval == "YES") {
            $this->sendPasswordResetMail();
            echo "A Password reset mail send to your email account";
        } else {
            echo "NO such email is registered with us";
        }
    }

    public function sendPasswordResetMail()
    {
        echo "Message sent success";
    }

    public function seller_feedback_action()
    {
        $insertdata = $this->input->post();
        $insertdata['username'] = $this->session->userdata("seller_username");
        $this->load->model('feedback_model');
        $rtn = $this->feedback_model->add_seller_feedback($insertdata);
        if($rtn)
        {
            redirect(base_url('seller/view_profile'));
        }
        else
        {
            redirect(base_url('seller/view_profile'));
        }
    }

    public function seller_feedback()
    {
        $this->load->view("dashboard/seller/seller_dashboard_header");
        $this->load->view("dashboard/seller/seller_dashboard_feedback");
        $this->load->view("dashboard/seller/seller_dashboard_footer");

    }

    public function seller_product_edit($product_id)
    {
        $productdata = $this->input->post();
        $this->load->model('product_model');

        $product_data = $this->product_model->get_product_based_on_id($product_id);

        $data['product_data'] = $product_data;
        $data['selected_product_id'] = $product_id;
        $this->load->view("dashboard/seller/seller_dashboard_header", $data);
        $this->load->view('dashboard/seller/seller_product_edit', $data);
        $this->load->view("dashboard/seller/seller_dashboard_footer");
    }

    public function change_order_status($id, $status)
    {

        if ($status == 'completed') {
            redirect(base_url('seller/view_profile'));
        }
        $this->load->model('product_model');
        $rtn = $this->product_model->change_order_status($id, $status);
        if ($rtn) {
            redirect(base_url('seller/view_profile'));
        } else {
            redirect(base_url('seller/view_profile'));
        }


    }


    function add_product()
    {
        if (!$this->session->userdata("seller_username")) {
            redirect("login/seller_login");
        }

        $this->load->view("dashboard/seller/seller_dashboard_header");
        $this->load->view("dashboard/seller/seller_add_product");
        $this->load->view("dashboard/seller/seller_dashboard_footer");
    }

    function add_product_action()
    {
        $insertdata = $this->input->POST();
        $this->load->library('upload');
        if (!$this->upload->do_upload('image')) { //die('if');
            $upload_error = array('error' => $this->upload->display_errors());
            $data['upload_error'] = '<div class="alert alert-danger text-center">' . $upload_error['error'] . '</div>';
            $this->load->view("dashboard/seller/seller_dashboard_header", $data);
            $this->load->view("dashboard/seller/seller_add_product", $data);
            $this->load->view("dashboard/seller/seller_dashboard_footer", $data);
        } else { //die('else');
            $upload_data = $this->upload->data();
            $data['success_msg'] = '<div class="alert alert-success text-center"> your file ' . $upload_data['file_name'] . 'was successfully upload</div>';

            $insertdata['productimage'] = $upload_data['file_name'];
            $this->load->model("product_model");
            $seller_username = $this->session->userdata("seller_username");
            //die('here');
            $this->load->model('registration');
            $seller_id = $this->registration->getSellerIdFromUsername($seller_username);
            $insertdata['added_seller_id'] = $seller_id;
            $return_data = $this->product_model->add_product_model($insertdata);
            if ($return_data) {
                redirect(base_url('seller/view_profile'));
            } else {
                redirect(base_url('seller/add_product'));
            }
        }

    }
    public function edit_product_action()
    {
        $data = $this->input->post();
        if (!$this->upload->do_upload('image')) { //die('if');
            $upload_error = array('error' => $this->upload->display_errors());
            $data['upload_error'] = '<div class="alert alert-danger text-center">' . $upload_error['error'] . '</div>';
            $this->load->view("dashboard/seller/seller_dashboard_header", $data);
            $this->load->view("dashboard/seller/seller_product_edit", $data);
            $this->load->view("dashboard/seller/seller_dashboard_footer", $data);
        } else { //die('else');
            $upload_data = $this->upload->data();
            $data['success_msg'] = '<div class="alert alert-success text-center"> your file ' . $upload_data['file_name'] . 'was successfully upload</div>';

            $insertdata['productimage'] = $upload_data['file_name'];
            $this->load->model("product_model");
            $seller_username = $this->session->userdata("seller_username");
            //die('here');
            $this->load->model('registration');
            $seller_id = $this->registration->getSellerIdFromUsername($seller_username);
            $insertdata['added_seller_id'] = $seller_id;
            $return_data = $this->product_model->product_edit($insertdata);
            if ($return_data) {
                redirect(base_url('seller/seller_my_product'));
            } else {
                redirect(base_url('seller/product_edit'));
            }
        }

    }


}




