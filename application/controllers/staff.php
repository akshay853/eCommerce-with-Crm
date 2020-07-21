<?php


class staff extends CI_Controller
{
    public function view_profile()
    {
        if(!$this->session->userdata("staff_username"))
        {
           redirect("login/staff_login"); 
        }
          $this->load->model('usr');
          $username=$this->session->userdata("staff_username");
          $profiledata=$this->usr->get_staff_profile($username);
          $data['staff_profile_data']=$profiledata;
          $this->load->view("dashboard/staff/staff_dashboard_header",$data);
          $this->load->view("dashboard/staff/staff_view_profile",$data);
          $this->load->view("dashboard/staff/staff_dashboard_footer",$data);
       // $this->load->view("staff_profile1",$data);
        
       // $this->load->view("staff_profile1");
    }
    public function edit_profile()
    {
          $this->load->model('usr');
          $username= $this->session->userdata("staff_username");
          $profiledata=$this->usr->get_staff_profile($username);
          $data['staff_profile_data']=$profiledata;
          $this->load->view("dashboard/staff/staff_dashboard_header",$data);
          $this->load->view('dashboard/staff/staff_profile_edit',$data); 
          $this->load->view("dashboard/staff/staff_dashboard_footer",$data);
    }
    public function edit_profile_action()
    {
        $add = $this->input->post();
        $this->load->library('upload');
        if(!$this->upload->do_upload('image'))
        {
            $upload_error = array('error' => $this->upload->display_errors());
            $data['upload_error'] = $upload_error;
            
            print_r($data['upload_error']);
            redirect("staff/edit_profile");
        }
        else 
        {
         $upload_data = $this->upload->data();      //   print_r($upload_data);         die();
         $data['success_msg']='<div class="alert alert-success text-center"> your file '.$upload_data['file_name'].'was successfully upload';
            
        $add['staffimage']= $upload_data['file_name'];
       $this->load->model("profile_edit");
       $username= $this->session->userdata("staff_username");
       $this->profile_edit->update_staff_profile($add,$username);
       redirect("staff/view_profile");
        }
    }
    public function staff_home()
    {
         if(!$this->session->userdata("staff_username"))
        {
           redirect("login/staff_login"); 
        }
        $this->load->view("dashboard/staff/staff_dashboard_header");
         $this->load->view("dashboard/staff/staff_dashboard_main");
          $this->load->view("dashboard/staff/staff_dashboard_footer");
    }
    public function staff_forget_password()
    {
        $this->load->view("staff_forget_password");
    }
    public function forget_password_setting()
    {
       $arr=$this->input->post();
       $this->load->model("usr");
       $returnval = $this->usr->staff_forget($arr['email']);
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
   
      public function lead($user_id='')
      {
         $this->load->model('registration');
         $all_user = $this-> registration->get_all_users();
         //print_r($all_user);die();
         $data['all_users'] = $all_user;
         
         if($user_id)
         {
             $data['single_lead_data'] = $this->registration->get_lead_profile($user_id);
            
         }
         
        // print_r( $data['single_lead_data']);die();
          $this->load->model('task_model');
          $all_lead = $this->task_model->get_all_lead();
          $data['all_alead'] = $all_lead;
       
         
          
          
          $this->load->view("dashboard/staff/staff_dashboard_header",$data);
         $this->load->view("dashboard/staff/lead_management",$data);
          $this->load->view("dashboard/staff/staff_dashboard_footer",$data);
       // $this->load->view("staff_profile1",$data);
      }
      public function contact($user_id='')
      {
          $data['user_history']='';
         $this->load->model('registration');
         $all_user = $this-> registration->get_all_users();
         //print_r($all_user);die();
         
         if($user_id)
         {
             $data['single_user_data']    = $this->registration->get_user_profile($user_id);
             $data['user_history'] = $this->registration->get_user_history($user_id);
         }
         $data['all_users'] = $all_user;
         $this->load->view("dashboard/staff/staff_dashboard_header",$data);
         $this->load->view("dashboard/staff/contact_management",$data);
         $this->load->view("dashboard/staff/staff_dashboard_footer",$data);
      }
      public function task()
      {
          $this->load->model('task_model');
          $all_task = $this->task_model->get_all_tasks();
          $data['all_atask'] = $all_task;
          
         $this->load->view("dashboard/staff/staff_dashboard_header");
         $this->load->view("dashboard/staff/task_management",$data);
         $this->load->view("dashboard/staff/staff_dashboard_footer");
      }
    public function sale()
    {
        $this->load->model('product_model');
        $product_ratings = $this->product_model->get_all_ratings();
        $data['all_ratings'] = $product_ratings['products'];
        $data['total_count'] = $product_ratings['total'];
        //print_r( $product_ratings['total']);die();
        $this->load->view("dashboard/staff/staff_dashboard_header",$data);
        $this->load->view("dashboard/staff/sale_management",$data);
        $this->load->view("dashboard/staff/staff_dashboard_footer",$data);
    }
         public function invoice()
      {
            $this->load->view("dashboard/staff/staff_dashboard_header");
         $this->load->view("dashboard/staff/invoice_management");
          $this->load->view("dashboard/staff/staff_dashboard_footer");
      }
      
      public function change_task_status($task_id,$status_code)
      {
          $this->load->model('task_model');
          $returnval = $this->task_model->changeStatus($task_id,$status_code);
          if($returnval)
          {
              redirect(base_url('staff/task'));
          }
         else {
               redirect(base_url('staff/task'));
               }
      }
      
      public function add_new_task()
      {
          
          
        $this->load->view("dashboard/staff/staff_dashboard_header");
         $this->load->view("dashboard/staff/add_new_task");
          $this->load->view("dashboard/staff/staff_dashboard_footer");  
      }
      public function add_new_task_action()
      {
         $postdata=$this->input->post();
         $this->load->model("task_model");
         $returnval = $this->task_model->add_new_task($postdata);
       
         
         
         
                 if($returnval)
                 {
                     redirect(base_url('staff/task'));
                 }
             else {
                 
                     redirect(base_url('staff/add_new_task'));
                 }
       }
       public function add_new_lead()
         {
                      
                      
         $this->load->model('registration');
         $all_user = $this-> registration->get_all_users();
         $data['all_contact'] = $all_user; //print_r($all_user);
                      
                        
          $this->load->view("dashboard/staff/staff_dashboard_header",$data);
          $this->load->view("dashboard/staff/add_new_lead",$data);
          $this->load->view("dashboard/staff/staff_dashboard_footer",$data); 
           } 
           public function add_new_action()
             {
                  $postdata=$this->input->post();
                 
                  
                  $this->load->model("task_model");
                    $returnval = $this->task_model->add_new_lead($postdata);
                    
       
         
         
         
                 if($returnval)
                 {
                     redirect(base_url('staff/lead'));
                 }
                 else {
                     redirect(base_url('staff/add_new_lead'));
                        }
             }

                  // print_r($postdata);
      // $username= $this->add_new_task_model->add_new_task($postdata);
      
         public function add_to_recommended($id)
         {

             $this->load->model("product_model");
             $returnval = $this->product_model->add_to_recommended($id);
             if($returnval)
             {
                 
                 redirect(base_url('staff/sale'));
             }
             else
             {
                 redirect(base_url('staff/sale'));
             }
         }
         
          public function feedbacks()
    {

 //$this->login_check();

        $this->load->model('registration');
        $staff = $this->registration->get_all_staff_feedback();

        $data['all_feed'] = $staff;

        $this->load->view("dashboard/staff/staff_dashboard_header",$data);
        $this->load->view("dashboard/staff/feedbacks",$data);
        $this->load->view("dashboard/staff/staff_dashboard_footer",$data);
    }
            
      }
 ?>     
      
      
      

    

      