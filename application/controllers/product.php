<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product
 *
 * @author dell
 */
class product extends CI_Controller
{
    function add_product()
    {
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
            $data['upload_error'] = $upload_error;
            $this->load->view("add_product");
        } else { //die('else');
            $upload_data = $this->upload->data();
            $data['success_msg'] = '<div class="alert alert-success text-center"> your file ' . $upload_data['file_name'] . 'was successfully upload';

            $insertdata['productimage'] = $upload_data['file_name'];
            $this->load->model("product_model");
            $seller_username = $this->session->userdata("seller_username");
            //die('here');
            $this->load->model('registration');
            $seller_id = $this->registration->getSellerIdFromUsername($seller_username);
            $insertdata['added_seller_id'] = $seller_id;
            $return_data = $this->product_model->add_product_model($insertdata);
            if ($return_data) {
                redirect(base_url('seller/seller_home'));
            } else {
                redirect(base_url('product/add_product'));
            }
        }
    }

    function view_product()
    {
        $this->load->view("view_product");
    }

    public function single_product_view($id = 1)
    {

        $this->load->model("product_model");
        //$username= $this->session->userdata("productname");
        $arr = $this->product_model->get_single_product($id);  //print_r($arr);die();

        if($this->session->userdata("username"))
        $this->add_to_history("Viewed",$arr["productname"],"Not Purchased");

        $data['single_product'] = $arr;
        $this->load->view("shop/shop_session_header", $data);
        $this->load->view("shop/single_product_page", $data);
        $this->load->view("shop/shop_session_footer", $data);
    }
    public function add_to_history($action,$product,$status)
    {// die('sadsa');
    $this->load->model("product_model");
    $this->product_model->add_to_history($this->session->userdata("username"),$action,$product,$status);

      }




}
