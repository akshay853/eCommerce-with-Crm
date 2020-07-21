<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cart
 *
 * @author dell
 */
class Cart extends CI_Controller
{

    public function add_to_cart($id = '')
    {

        if ($this->session->userdata('username')) {
            $data['login_status'] = TRUE;
        } else {
            $data['login_status'] = FALSE;
        }





        $total_Amount = 0;
        $existing = "FALSE";
        $this->load->model('product_model');




        if ($this->session->userdata('cart')) { // die('here');
             //die('has_cart');
            if($id) {

                //echo('has cart');
                $cart_Data = $this->session->userdata('cart');  //print_r($cart_Data);die();
                $product_data = $this->product_model->get_product_details($id);
                $product_data['cart_count'] = 1;
                $product_data['sub_total'] = $product_data['cart_count'] * $product_data['productcost'];
                $data['cart_amount'] = $this->session->userdata('cart_amount');

                if (isset($cart_Data['cart']['img'])) {
                    unset($cart_Data['cart']['img']);
                }

                // print_r($cart_Data);echo('before loop');
                $updated_product = array();
                foreach ($cart_Data['cart'] as $key => $value) {

                    // echo $key;
                    if ($key == $id) {
                        $value['cart_count'] += 1;
                        $value['sub_total'] = $value['cart_count'] * $value['productcost'];
                        // print_r($value);die('alraeadt addeed');
                        $updated_product = $value;
                        $existing = "TRUE";

                        // print_r($updated_product);die('already added product count increased');
                    }


                }

                // print_r($updated_product);//die();

                if ($existing == "FALSE") {
                    //  echo('existing false');
                    $cart_Data['cart'][$id] = $product_data;
                } else if ($existing == "TRUE") {
                    // echo('existing false');
                    $cart_Data['cart'][$id] = $updated_product;
                }

                //print_r( $this->session->userdata('cart'));//die('middle');

                $this->session->set_userdata('cart', $cart_Data);

                $data['cart'] = $cart_Data['cart'];
                // print_r( $this->session->userdata('cart'));
                // print_r($data['cart']);
                //die('final');


                foreach ($data['cart'] as $single) {
                    $total_Amount += $single['productcost'] * $single['cart_count'];

                }
                $this->session->set_userdata('cart_amount', $total_Amount);
                $data['cart_amount'] = $total_Amount;

                if($this->get_login_username()) {

                    $this->load->view('shop/shop_session_header', $data);
                    $this->load->view('shop/user_view_cart', $data);
                    $this->load->view('shop/shop_session_footer', $data);
                }else{

                    $this->load->view('shop/shop_header', $data);
                    $this->load->view('shop/user_view_cart', $data);
                    $this->load->view('shop/shop_footer', $data);
                }





            }
            else{ //die('noid');




                $cart_Data =  $this->session->userdata('cart');

                if (isset($cart_Data['cart']['img'])) {
                    unset($cart_Data['cart']['img']);
                }
                $data['cart'] = $cart_Data['cart']; //print_r($data['cart']);die();
                $data['cart_amount'] =   $this->session->userdata('cart_amount');


                if($this->get_login_username()) {
                    $this->load->view('shop/shop_session_header', $data);
                    $this->load->view('shop/user_view_cart', $data);
                    $this->load->view('shop/shop_session_footer', $data);
                }
                else{
                    $this->load->view('shop/shop_header', $data);
                    $this->load->view('shop/user_view_cart', $data);
                    $this->load->view('shop/shop_footer', $data);
                }



            }




        } else {

            if($id) {

                $product_data = $this->product_model->get_product_details($id);        //print_r($product_data);die();
                $product_data['cart_count'] = 1;
                $product_data['sub_total'] = $product_data['cart_count'] * $product_data['productcost'];
                $sess_data['cart'][$id] = $product_data;
                $this->session->set_userdata('cart', $sess_data);

                $data['cart'] = $sess_data['cart'];
                // print_r($data['cart']);die('new cart');


                foreach ($data['cart'] as $single) {
                    $total_Amount += $single['productcost'] * $single['cart_count'];

                }
                $this->session->set_userdata('cart_amount', $total_Amount);
                $data['cart_amount'] = $total_Amount;

              // print_r($data['cart']);die();

                if($this->get_login_username()) {

                    $this->load->view('shop/shop_session_header', $data);
                    $this->load->view('shop/user_view_cart', $data);
                    $this->load->view('shop/shop_session_footer', $data);

                }else{

                    $this->load->view('shop/shop_header', $data);
                    $this->load->view('shop/user_view_cart', $data);
                    $this->load->view('shop/shop_footer', $data);

                }



            }
            else{
                $data['cart'] = '';
                $data['cart_amount'] =  '';

                if($this->get_login_username()) {

                    $this->load->view('shop/shop_session_header', $data);
                    $this->load->view('shop/user_view_cart', $data);
                    $this->load->view('shop/shop_session_footer', $data);
                }
                else
                {
                    $this->load->view('shop/shop_header', $data);
                    $this->load->view('shop/user_view_cart', $data);
                    $this->load->view('shop/shop_footer', $data);
                }








            }
        }





    }
    public function remove_item_single($id='')
    {
        if ($this->session->userdata('username')) {
            $data['login_status'] = TRUE;
        } else {
            $data['login_status'] = FALSE;
        }





        $cart_Data = $this->session->userdata('cart');
        //print_r($cart_Data);die('first');
        //  print_r($id);die();
        if(array_key_exists($id,$cart_Data['cart']))
        {
            // die('true');
            unset($cart_Data['cart'][$id]);
            if(isset($cart_Data['cart']['img']))
            {
                unset($cart_Data['cart']['img']);
            }
            $this->session->set_userdata('cart',$cart_Data);

        }

        // print_r($this->session->userdata('cart'));die();

        $this->recalculate_cart();


        redirect(base_url('cart/add_to_cart'));
    }

    public function decrease_count($id='')
    {
        if ($this->session->userdata('username')) {
            $data['login_status'] = TRUE;
        } else {
            $data['login_status'] = FALSE;
        }


        $cart_Data = $this->session->userdata('cart');

        // print_r($this->session->userdata('cart'));die();

        $updated_product = array();
        foreach ($cart_Data['cart'] as $key => $value) {

            // echo $key;
            if ($key == $id) {
                $value['cart_count'] -= 1;
                if( $value['cart_count'] == 0)
                {
                    $this->remove_item_single($id);
                }
                $value['sub_total'] = $value['cart_count'] * $value['productcost'];
                // print_r($value);die('alraeadt addeed');
                $updated_product = $value;
               // $existing = "TRUE";

                // print_r($updated_product);die('already added product count increased');
            }


        }

        // print_r($updated_product);die();
         $cart_Data['cart'][$id] = $updated_product;


        $this->session->set_userdata('cart',$cart_Data);

        $this->recalculate_cart();

         redirect(base_url('cart/add_to_cart'));
    }
    public function recalculate_cart()
    {
        $cart_Data = $this->session->userdata('cart');

       // print_r($cart_Data);die();
        $total_Amount = 0;



        if(isset($cart_Data['cart']['img']))
        {
            unset($cart_Data['cart']['img']);
        }


        foreach($cart_Data['cart'] as $single)
        {
            $total_Amount += $single['productcost']*$single['cart_count'];

        }

        // print_r($this->session->userdata('cart'));die();

        $this->session->set_userdata('cart_amount', $total_Amount);
        $this->session->set_userdata('cart',$cart_Data);




    }
    public function clear_cart()
    {
        $this->session->unset_userdata('cart');
        redirect(base_url(''));
    }
    public function checkout()
    {
        if ($this->session->userdata('login_username')) {
            $data['login_status'] = TRUE;
        } else {
            $data['login_status'] = FALSE;
        }


        if(!$this->session->userdata('cart'))
        {
            redirect(base_url('customer/view_all_products'));
        }
        $cart_Data = $this->session->userdata('cart');


        if(isset($cart_Data['cart']['img']))
        {
            unset($cart_Data['cart']['img']);
        }

        $data['cart'] = $cart_Data['cart'];
        $data['cart_amount'] = $this->session->userdata('cart_amount');

        //print_r($cart_Data);die();
        $this->load->view("common/common_header",$data);
        $this->load->view("common/checkout",$data);
        $this->load->view("common/common_footer",$data);
    }
    public function place_order()
    {
        if ($this->session->userdata('username')) { //die('login');
            $data['login_status'] = TRUE;
        } else { //die('no login');
            $data['login_status'] = FALSE;
        }

        if(!$this->session->userdata('cart'))
        {
            redirect(base_url(''));
        }

        $profiledata = array();
        $cart_Data = $this->session->userdata('cart');


        if(isset($cart_Data['cart']['img']))
        {
            unset($cart_Data['cart']['img']);
        }

        $data['cart'] = $cart_Data['cart'];
        $data['cart_amount'] = $this->session->userdata('cart_amount');
        $data['login_user'] = $this->get_login_status();


        if($this->get_login_status())
        {

            $this->load->model('registration');
            $profiledata = $this->registration->get_user_profile_from_id($this->get_login_status());
            $data['profiledata'] = $profiledata; //print_r($profiledata);die();
        }


        if($this->get_login_username()) {

            $this->load->view('shop/shop_session_header', $data);
            $this->load->view('shop/place_order', $data);
            $this->load->view('shop/shop_session_footer', $data);
        }
        else{

            $this->load->view('shop/shop_header', $data);
            $this->load->view('shop/place_order', $data);
            $this->load->view('shop/shop_footer', $data);
        }


    }
    public function place_order_action()
    {
        $cart_Data = $this->session->userdata('cart');
        if(isset($cart_Data['cart']['img']))
        {
            unset($cart_Data['cart']['img']);
        }

        $user_id = $this->get_login_status();
        $cart = serialize($cart_Data);
        $this->load->model('product_model');
        $status = $this->product_model->add_order($user_id,$cart,'placed');
        if($status)
        {
            redirect(base_url('cart/order_placed_success'));
        }
        else{
            redirect(base_url('cart/place_order'));
        }

    }
    public function order_placed_success()
    {

        if ($this->session->userdata('username')) {
            $data['login_status'] = TRUE;
        } else {
            $data['login_status'] = FALSE;
        }

        if(!$this->get_login_status())
        {
            redirect(base_url('customer/view_all_products'));
        }
        if($this->session->userdata('cart'))
        {
            $this->session->unset_userdata('cart');
        }
        $data['success'] = TRUE;


        if($this->get_login_username()) {

            $this->load->view('shop/shop_session_header', $data);
            $this->load->view('shop/order_placed_success', $data);
            $this->load->view('shop/shop_session_footer', $data);
        }
        else{

            $this->load->view('shop/shop_header', $data);
            $this->load->view('shop/order_placed_success', $data);
            $this->load->view('shop/shop_footer', $data);
        }

    }
    public function get_login_status()
    {
        if ($this->session->userdata('username')) {
            return $this->session->userdata('username');
        } else {
            return '';
        }
    }



    public function session_tester()
    {
        $this->load->view("shop/shop_session_header");
        $this->load->view("shop/session_tester");
        $this->load->view("shop/shop_session_footer");

    }
    public function set_session()
    {
        $post_val = $_POST['var'];
             $item = $post_val;
        $this->session->set_userdata('item_count', $item." hii");

            echo $this->session->userdata('item_count');
          die();

    }

    public function view_session()
    {
        print_r($this->session->userdata('item_count'));die();
    }
    public function get_login_username()
    {
        return $this->session->userdata('username');
    }
    public function add_to_history($action,$product,$status)
    {
        $this->load->model("product_model");
        $this->product_model->add_to_history($this->session->userdata("username"),$action,$product,$status);

    }



}
