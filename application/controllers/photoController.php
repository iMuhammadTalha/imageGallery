<?php

use PHPMailer\PHPMailer\PHPMailer;      //For Email sending

class photoController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        //Load session library
        $this->load->library('session');

        // Load the captcha helper
//        $this->load->helper('captcha');
    }

    public function userlogin()                      //Login Form view
    {
        $this->load->view('user_login');
    }

    public function login()                             //Checking during login
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('password','password','required');
        if($this->form_validation->run())
        {
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            $this->load->model('photoModel');
            if($this->photoModel->can_login($email,$password))
            {

                $this->load->model('photoModel');
                $fetch_data=$this->photoModel->userInfo($email);

                foreach($fetch_data->result() as $row)
                { }
                $session_data=array(
                    'email'=>$email,
                    'UserName'=>$row->UserName
                );
                $this->session->set_userdata($session_data);                        //creating session against email
                redirect(base_url('index.php/photoController/index'));
            }
            else
            {
                $this->session->set_flashdata('error','invalid username or password');
                redirect(base_url('index.php/photoController/login'));
            }
        }
        else
        {
            $this->userlogin();
        }
    }

    public function usersignup()                     //Signup Form view
    {

        // Load the view
        $this->load->view('user_signup');
    }

    public function signup()                                            //Signup new user
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('confirmpassword','confirmpassword','required');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('email','email','required|valid_email');

        if($this->form_validation->run())
        {
            if($this->input->post('password')==$this->input->post('confirmpassword'))
            {

                    $this->load->model('photoModel');
                    $data = array(
                        'UserName' => $this->input->post('username'),
                        'email' => $this->input->post('email'),
                        'Password' => $this->input->post('password'),
                        'email' => $this->input->post('email')
                    );


                    if(!$this->photoModel->isAlreadyExsistUser())
                    {
                        if ($this->photoModel->signup_user($data))
                        {

                            $this->load->view('user_login');
                        }
                        else
                        {
                            $this->session->set_flashdata('error', 'Error');
                            redirect(base_url('index.php/photoController/usersignup'));
                        }
                    }
                    else
                    {
                        $this->session->set_flashdata('error', 'Account already Created');
                        redirect(base_url('index.php/photoController/usersignup'));
                    }

            }
            else {
                $this->session->set_flashdata('error', 'Password not matched');
                redirect(base_url('index.php/photoController/usersignup'));
            }
        }
    }


    public function index()                     //front page after login
    {
        $email=$this->session->userdata('email');

        $this->load->model('photoModel');
        $fetch_data=$this->photoModel->userInfo($email);

        $this->load->view('photo_index');
    }

    public function profile()                   //Showing profile of user
    {
        $email=$this->session->userdata('email');

        $this->load->model('photoModel');
        $data['fetch_data']=$this->photoModel->profile($email);

        $this->load->view('advisor_profile',$data);
    }

    public function userAllImages()            //Show images
    {
        $email=$this->session->userdata('email');

        $this->load->model("photoModel");
        $data["fetch_data"] = $this->photoModel->userAllImages($email);
        $this->load->view("user_AllImages", $data);
    }



    public function addImage()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title','title','required');
        $this->form_validation->set_rules('description','description','required');

        if($this->form_validation->run())
        {
            $this->load->model('photoModel');
            $email=$this->session->userdata('email');

            if ($this->advisormodel->addImage($email))
            {
                redirect(base_url('index.php/photoController/userAllImages'));
            }
            else
            {
                $this->session->set_flashdata('error', 'Error');
                redirect(base_url('index.php/photoController/userAllImages'));
            }
        }
        else
        {
            $this->session->set_flashdata('error', 'Invalid ');
            redirect(base_url('index.php/photoController/userAllImages'));
        }
    }


}

?>

