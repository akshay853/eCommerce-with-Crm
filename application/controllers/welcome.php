<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
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

    public function loginCheck()
    {
        if (!$this->session->userdata('username')) {
            redirect('login/user_login');
        } else {
            return true;
        }
    }

    public function get_login_username()
    {
        return $this->session->userdata('username');
    }

    public function index()
    {
        $this->load->model("product_model");
        //$username= $this->session->userdata("productname");
        $arr = $this->product_model->view_all_products();
        $data['all_product'] = $arr;

        $data["recommended"] = $this->product_model->view_all_recommended();


        if ($this->get_login_username()) {

            // die('if');
            $this->load->view('shop/shop_session_header', $data);
            $this->load->view('shop/shop_main', $data);
            $this->load->view('shop/shop_session_footer', $data);
        } else {//die('else');
            $this->load->view('shop/shop_header', $data);
            $this->load->view('shop/shop_main', $data);
            $this->load->view('shop/shop_footer', $data);
        }
    }

    public function add_to_history($action, $product, $status)
    {
        $this->load->model("product_model");
        $this->product_model->add_to_history($this->session->userdata("username"), $action, $product, $status);

    }

    public function contact()
    {
        if ($this->get_login_username()) {

            // die('if');
            $this->load->view('shop/shop_session_header');
            $this->load->view('shop/contact');
            $this->load->view('shop/shop_session_footer');
        } else {//die('else');
            $this->load->view('shop/shop_header');
            $this->load->view('shop/contact');
            $this->load->view('shop/shop_footer');
        }
    }

    public function mail()
    {
        $this->load->library('email');

        $subject = 'This is a test';
        $message = '<p>This message has been sent for testing purposes.</p>';

// Get full html:
        $body = 'Hello this is a sample mail';
// Also, for getting full html you may use the following internal method:
//$body = $this->email->full_html($subject, $message);

        $result = $this->email
            ->from('techantmail@gmail.com')
            ->reply_to('aslamaslo@gmail.com')    // Optional, an account where a human being reads.
            ->to('aslammocheri@gmail.com')
            ->subject($subject)
            ->message($body)
            ->send();

        var_dump($result);
        echo '<br />';
        echo $this->email->print_debugger();

        exit;
    }

        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */