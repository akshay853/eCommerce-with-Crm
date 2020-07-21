<?php


class feedback extends CI_Controller
{
    public function customer_feedback()
    {
        $this->load->view("customer_feedback_form");
    }
     public function customer_feedback_action()
    {
        $insertdata = $this->input->post();
        $insertdata['username'] = $this->session->userdata("username");
        $this->load->model('feedback_model');
        $rtn = $this->feedback_model->add_seller_feedback($insertdata);
        if($rtn)
        {
            redirect(base_url('welcome/index'));
        }
        else
        {
            redirect(base_url('feedback/usercomplaint'));
        }
    }
    public function seller_feedback()
    {
        $this->load->view("seller_feedback_form");
    }
    public function seller_feedback_action()
    {
       $insertdata=$this->input->post();
       $this->load->model('feedback_model');
       $this->feedback->add_seller_feedback($insertdata);  
    }
    public function staff_feedback()
    {
        $this->load->view("staff_feedback_form");
    }
    public function staff_feedback_action()
    {
       $insertdata=$this->input->post();
       $this->load->model('feedback_model');
       $this->feedback->add_staff_feedback($insertdata);  
    }
    public function usercomplaint()
    {
   
        $this->load->view("customer_complaint");
    }
             
}
