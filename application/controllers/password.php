<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Password extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */


    public function index()
    {

    }


    public function password_reset($user_type = '',$message='')
    {
        $data['user_type'] = $user_type;
        $data['message'] = '';

        if($message)
        {
            if($message == "error_no_email")
            {
                $data['message'] = '<div class="alert-danger">Sorry That Email is not registered with us</div>';
            }
            else if($message == "email_sent")
            {
                $data['message'] = '<div class="alert-success">A reset Email Has been send to your inbox, Please click on it to continue.</div>';
            }
        }

             $this->load->view('password/password_reset', $data);
    }

    public function password_success()
    {
        $data['base_url'] = base_url();
        $this->load->view('password/password_success', $data);
    }


    public function password_reset_action()
    {
        $email = $_POST['email'];
        $user_type = $_POST['usertype'];
        $this->load->model('password_model');
        $exist = $this->password_model->checkEmailExist($email, $user_type); //print_r($exist);die();
        if ($exist) {

            if($user_type == "user")
            $user_id = $exist[0]['user_id'];
            else if($user_type == "staff")
                $user_id = $exist[0]['staff_id'];
            else if($user_type == "seller")
                $user_id = $exist[0]['seller_id'];



            $link = $this->prepareLink($user_type, $user_id);
            $mail = $this->sendResetMail($link, $email);
            if($mail)
            {

                redirect(base_url("password/password_reset")."/".$user_type."/email_sent");
            }

        } else {

                redirect(base_url("password/password_reset")."/".$user_type."/error_no_email");
        }


    }
    public function password_reset_form_action()
    {

        $post = $this->input->post(); //print_r($post);die();
        $id = $post['userid'];
        $user_type = $post['type']; //echo $user_type;die();

        $arr['password'] = $_POST['password'];

        $this->load->model('password_model');
        $done = $this->password_model->updatePassword($id, $user_type,$arr); // print_r($exist);die();
        if ($done) {

            redirect(base_url('password/password_success'));

        } else {
            redirect(base_url());
        }


    }

    public function prepareLink($type, $id)
    {
        $type = $type;
        $to_encrypt_string = $type . "-*-" . $id;
        $encoded_string = base64_encode($to_encrypt_string);
        $encoded_string = urlencode($encoded_string);
        $link = base_url() . "password/reset_my_password/" . $encoded_string;
        return $link;
    }

    public function sendResetMail($link, $email)
    {
        $this->load->library('email');

        $subject = 'Reset your CRM ECOMMERCE Password';
        $message = '<p>Click this ' . $link . ' link to reset your pass word.</p>';

// Get full html:
        $body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
    <title>' . html_escape($subject) . '</title>
    <style type="text/css">
        body {
            font-family: Arial, Verdana, Helvetica, sans-serif;
            font-size: 16px;
        }
    </style>
</head>
<body>
' . $message . '
</body>
</html>';
// Also, for getting full html you may use the following internal method:
//$body = $this->email->full_html($subject, $message);

        $result = $this->email
            ->from('techantmail@gmail.com')
            ->reply_to($email)// Optional, an account where a human being reads.
            ->to($email)
            ->subject($subject)
            ->message($body)
            ->send();

         return $result;

    }
    public function reset_my_password($enc)
    {
        $this->load->model('password_model');
        $decrypt = base64_decode(urldecode($enc)); //die($decrypt);
        $arr = explode('-*-',$decrypt);
        $user_type   = $arr[0]; // print_r($arr);
        $user_id     = $arr[1];
        if($this->password_model->checkIDExist($user_id,$user_type))
        {
            $data['user_type'] = $user_type;
            $data['user_id'] = $user_id; //echo $user_type;die();
            $this->load->view('password/password_reset_form', $data);
        }
        else{
            redirect(base_url());
        }
    }


    public function checkEmailExists()
    {
        $email = $_POST['email'];
        $this->load->model('password_model');
        $found = $this->password_model->findThisEmail($email);
        if($found)
        {
            echo "YES";
            exit();
        }
        else{
            echo "NO";
            exit();
        }



    }


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */