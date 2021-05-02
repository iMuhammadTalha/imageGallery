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


                $session_data=array(
                    'email'=>$email,
                    'UserName'=>$fetch_data['username']
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

        $data['dataVolumeUsedToday']= round($fetch_data['data_used_today']/1048576,2);
        $data['dataVolumeRemainingToday']=25-round($fetch_data['data_used_today']/1048576,2);
        $data['totalStorageUsed']=round($fetch_data['storage_used']/1048576,2);
        $data['totalStorageRemaining']=10-round($fetch_data['storage_used']/1048576,2);

        $this->load->view('photo_index', $data);
    }

    public function profile()                   //Showing profile of user
    {
        $email=$this->session->userdata('email');

        $this->load->model('photoModel');
        $data['fetch_data']=$this->photoModel->profile($email);

        $this->load->view('user_profile',$data);
    }



    public function userAllImages()            //Show images
    {
        $email=$this->session->userdata('email');

        $this->load->model("photoModel");
        $data["gallery"] = $this->photoModel->userAllImages($email);
        $fetch_data=$this->photoModel->userInfo($email);

        $data['volumeUsed']= round($fetch_data['data_used_today']/1048576,2);
        $data['volumeRemaining']=25-round($fetch_data['data_used_today']/1048576,2);
        $data['dataUsed']=round($fetch_data['storage_used']/1048576,2);
        $data['dataRemaining']=10-round($fetch_data['storage_used']/1048576,2);

        $eror = $this->session->flashdata('error');
        $data['errors'] = $eror;

        $this->load->view("user_AllImages", $data);
    }

    public function addImage()
    {
        $this->load->library('form_validation');

//        if($this->form_validation->run())
//        {
        $email=$this->session->userdata('email');

        $this->load->model('photoModel');
        $fetch_data=$this->photoModel->userInfo($email);

        $size=0;

        if(!empty($_FILES['images']['name'])){
            $size=$_FILES['images']['size'][0];
            $dataUsed=round(($fetch_data['storage_used']+$size)/1048576,2);
            $volumeUsedToday=round(($fetch_data['data_used_today']+$size)/1048576,2);
            if($dataUsed<10){        //10
                if($volumeUsedToday<25){        //25
                    $filesCount = count($_FILES['images']['name']);
                    for($i = 0; $i < $filesCount; $i++){
                        $_FILES['file']['name']     = $_FILES['images']['name'][$i];
                        $_FILES['file']['type']     = $_FILES['images']['type'][$i];
                        $_FILES['file']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                        $_FILES['file']['error']    = $_FILES['images']['error'][$i];
                        $_FILES['file']['size']     = $_FILES['images']['size'][$i];
        //filesize
                        $size=$_FILES['images']['size'][$i];

                        // File upload configuration
                        $uploadPath = 'uploads/images/';
                        $config['upload_path'] = $uploadPath;
                        $config['allowed_types'] = 'jpg|jpeg|png|gif';

                        // Load and initialize upload library
                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);

                        // Upload file to server
                        if($this->upload->do_upload('file')){
                            // Uploaded file data
                            $fileData = $this->upload->data();

                            $uploadData[$i]['image_path'] = $fileData['file_name'];
                            $uploadData[$i]['user_id'] = $fetch_data['id'];
                            $uploadData[$i]['size'] = $size;
        //                    $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                        }else{
        //                    $errorUpload .= $fileImages[$key].'('.$this->upload->display_errors('', '').') | ';
                        }
                    }

                    // File upload error message
        //            $errorUpload = !empty($errorUpload)?' Upload Error: '.trim($errorUpload, ' | '):'';

                    if(!empty($uploadData)){
                        // Insert files info into the database
                        $insert = $this->photoModel->insertImage($uploadData);

                        $this->photoModel->updateStorage($email, $size);
                        $this->photoModel->updateVolume($email, $size);
                    }
                } else {
                    $this->session->set_flashdata('error','Today usage limit exceeded');
                    redirect(base_url('index.php/photoController/userAllImages'));
                }
            } else {
                $this->session->set_flashdata('error','Storage limit exceeded');
                redirect(base_url('index.php/photoController/userAllImages'));
            }
        }
        redirect(base_url('index.php/photoController/userAllImages'));

    }

    public function deleteImage(){
        $ID=$this->uri->segment(3);                          //Getting Key from URL
        $email=$this->session->userdata('email');


        $this->load->model("photoModel");
            $imgData = $this->photoModel->userAImage($ID);

            // Delete image data
        $delete = $this->photoModel->deleteAImage($ID);

            if($delete){
                // Remove files from the server
                @unlink('uploads/images/'.$imgData['image_path']);
                $this->photoModel->decreaseStorage($email, $imgData['size']);
            }
        redirect(base_url('index.php/photoController/userAllImages'));
    }

    public function deleteAllImages(){

        $email=$this->session->userdata('email');

        $this->load->model("photoModel");
//        $imgsData = $this->photoModel->userAllImagesArray($email);

        $imgsData = $this->photoModel->getImagesRows($email);

        foreach($imgsData['images'] as $img)      // Delete All images data
        {

            $delete = $this->photoModel->deleteAImage($img['id']);

            if($delete){
                // Remove files from the server
                @unlink('uploads/images/'.$img['image_path']);
                $this->photoModel->decreaseStorage($email, $img['size']);
            }
        }

        redirect(base_url('index.php/photoController/userAllImages'));
    }

}

?>

