<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of notification
 *
 * @author Nivya K
 */
class notification extends CI_Controller
{
    public function index()
    {
        $this->load->view("notification");
    }
    public function notification_action()
      {        
        $add = $this->input->post();
        $this->load->model("notification_model");
        $this->notification_model->add_notification($add);
    } 
  
             
}          
    



