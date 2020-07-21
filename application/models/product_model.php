<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of product_model
 *
 * @author dell
 */
class product_model extends CI_Model
{
    public function add_product_model($data)
    {
       // print_r($data);
        return $this->db->insert("product",$data);
    }
    public function get_all_products($sellerid = '')
    {
        $this->db->select("*");
        $this->db->from("product");
        if($sellerid != '')
        {
        $this->db->where('added_seller_id',$sellerid);
        }
                $query=$this->db->get();
        $resultarray=$query->result_array(); 
        return $resultarray;
    }
    public function get_product_based_on_id($prod_id)
    {
        $this->db->select("*");
      $this->db->from("product");
      $this->db->where("product_id",$prod_id);
      $query=$this->db->get();
      $resultarray=$query->result_array();
      //print_r($resultarray);die();
      $dataarray=array();
      foreach($resultarray as $row)
      {
          $dataarray=$row;
      }
      //print_r($dataarray);die();
      return $dataarray;
    }
    public function product_edit($data)
    {
        $prod_id = $data['selected_product_id'];
        unset($data['selected_product_id']);
        $this->db->where('product_id',$prod_id);
        return $this->db->update("product",$data);
    }
        public function view_all_products($seller_id='')
     {
         $this->db->select("*");
         $this->db->from("product");
         
         if($seller_id){
         $this->db->where("added_seller_id",$seller_id);
         }
         $query=$this->db->get();
      $resultarray=$query->result_array();
      return($resultarray);
     }
     public function get_single_product($id)
     {
         $this->db->select("*");
         $this->db->from("product");
         $this->db->where('product_id',$id);
         $query=$this->db->get();
        
      $resultarray=$query->result_array();
      return($resultarray[0]);
     }
     public function edit_seller_product($insertdata)
     {
         
         $product_id = $insertdata['product_id'];
         unset($insertdata['product_id']);
         $this->db->where('product_id',$product_id);
        return $this->db->update("product",$insertdata);
     }



     //* FOR CART OPERATIONS *//

    function get_product_details($prod_id)
    {
        $this->db->select("*");
        $this->db->from("product");
        $this->db->where("product_id", $prod_id);
        $query = $this->db->get();
        $resultarray = $query->result_array();
        //print_r($resultarray);die();
        $dataarray = array();
        foreach ($resultarray as $row) {
            $dataarray = $row;
        }
        //print_r($dataarray);die();
        return $dataarray;
    }
    function add_order($user_name,$data,$status)
    {
        $customer_id = $this->getUserIdFromUsername($user_name);
        $arr = array('customer_id'=>$customer_id,'order_items'=>$data,'status'=>$status,'date'=>date('Y-m-d'));
        return $this->db->insert("order",$arr);
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
    public function get_all_orders_of_customer($username)
    {
        $user_id=$this->getUserIdFromUsername($username);
        $this->db->select("*");
        $this->db->from("order");
        $this->db->where("customer_id",$user_id);
        $query =$this->db->get();
        $data =$query->result_array();
        $detailed_order=array();
        foreach($data as $order)
        {
            $order['customer_name'] = $this->get_fullname_from_userid($order['customer_id']);
            $order['order_items'] = unserialize($order['order_items']);
            $detailed_order[]=$order;
        }
        return $detailed_order;
    }

    function get_fullname_from_userid($id)
    {
        $this->db->select("firstname,secondname");
        $this->db->from("user_register");
        $this->db->where("user_id",$id);
        $query =$this->db->get();
        $data =$query->result_array();
        return $data[0]['firstname'].' '.$data[0]['secondname'];
    }
    public function get_all_orders()
    {
        $this->db->select("*");
        $this->db->from("order");
        $query =$this->db->get();
        $data =$query->result_array();
        $detailed_order=array();
        foreach($data as $order)
        {
            $order['customer_name'] = $this->get_fullname_from_userid($order['customer_id']);
            $order['order_items'] = unserialize($order['order_items']);
            $detailed_order[]=$order;
        }
        return $detailed_order;
    }
    public function change_order_status($id,$status)
    {

        $data = array();
        if($status == 'placed') {
            $data['status'] = 'processing';
        }
        else if($status == 'processing')
        {
            $data['status'] = 'delivery';
        }
        else if($status == 'delivery')
        {
            $data['status'] = 'completed';
        }

        $this->db->where("order_id",$id);
        return $this->db->update("order",$data);
    }
    public function add_to_history($username,$action,$product,$status)
    {
      $arr = array();
      $arr['username'] = $username;
      $arr['action']   = $action;
      $arr['product']  =$product;
      $arr['status']   =$status;

      $this->db->insert("user_history",$arr);

    }
     public function get_all_ratings()
     {
         $product_ratings = array();
         $all_orders = $this->get_all_orders(); //print_r($all_orders);die();
         $total_count = 0 ;
         foreach($all_orders as $order)
         {

             $cart = $order['order_items']['cart'];
             foreach ($cart as $key=>$value)
             {
                 if(isset($product_ratings[$key]))
                 {
                     $product_ratings[$key]['cart_count'] = $product_ratings[$key]['cart_count'] + $value['cart_count'];
                     $product_ratings[$key]['sub_total'] = $product_ratings[$key]['sub_total'] + $value['sub_total'];
                 }
                 else {
                     $product_ratings[$key] = $value;
                 }

                 $total_count = $total_count + $value['cart_count'];

             }


         }

        return array("products"=>$product_ratings,"total"=>$total_count);


     }
     public function add_to_recommended($id)
     {
         $data["recommended_status"] = "YES";
         $this->db->where("product_id",$id);
         return $this->db->update("product",$data);
         }

    public function view_all_recommended()
    {
        $this->db->select("*");
        $this->db->from("product");

        $this->db->where('recommended_status',"YES");

        $query=$this->db->get();
        $resultarray=$query->result_array();
        return $resultarray;
    }





}
