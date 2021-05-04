<?php

class PhotoModel extends CI_Model
{

    function isAlreadyExsistUser()                  //For Checking during signup that this username has already created account already or not
    {
        $email=$this->input->post('email');
        $this->db->where('email',$email);
        $query=$this->db->get('users');
        if($query->num_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function signup_user($data)                //Signup
    {
        if ($this->db->insert("users", $data))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function can_login($email,$password)           //Login
    {
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $query=$this->db->get('users');
        if($query->num_rows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }



    function profile($email)
    {
        $this->db->where('email',$email);
        $query=$this->db->get('users');
        return $query;
    }

    function userInfo($email)
    {
        $data=$this->db->query("SELECT `id`,`username`,`email`,`storage_used`,`data_used_today` FROM users WHERE users.email='$email'");
        return $data->row_array();
    }

    function userAllImages($email)       //Getting Records of only that students whose  is that user.
    {
        $data=$this->db->query("SELECT picture.id, picture.image_path, picture.date_time, picture.size FROM `picture` JOIN users ON users.id=picture.user_id WHERE users.email='$email' ");
        return $data;
    }

    function userAImage($id)       //Getting Records of only that students whose  is that user.
    {
        $data=$this->db->query("SELECT picture.id, picture.image_path, picture.date_time, picture.size FROM `picture` WHERE picture.id='$id' ");
        return $data->row_array();
    }

    function userAllImagesArray($email)       //Getting Records of only that students whose  is that user.
    {
        $data=$this->db->query("SELECT picture.id, picture.image_path, picture.date_time, picture.size FROM `picture` JOIN users ON users.id=picture.user_id WHERE users.email='$email' ");
        return $data->row_array();
    }


    public function getImagesRows($email){
        $data=$this->db->query("SELECT picture.id, picture.image_path, picture.date_time, picture.size FROM `picture` JOIN users ON users.id=picture.user_id WHERE users.email='$email' ");
        $result['images'] = $data->result_array();
        return $result;

    }

    public function getImgRow($id){
        $this->db->select('*');
        $this->db->from($this->imgTbl);
        $query=$this->db->get('users');
        $this->db->where('id', $id);
        $query  = $this->db->get();
        return ($query->num_rows() > 0)?$query->row_array():false;
    }

    function deleteAImage($id)       //Getting Records of only that students whose  is that user.
    {
        $data=$this->db->query("DELETE FROM `picture` WHERE picture.id='$id' ");
        return true;
    }

    function addImage($email)                         //Adding new student announcement in DB
    {
        $Type = "Student";
        $To = "Student";
        $Title = $this->input->post('title');
        $Description = $this->input->post('description');
        $Date = date('Y-m-d');
        if($this->db->query("INSERT INTO `announcement`(`Type`, `A_From`, `A_To`, `Title`, `Description`, `Date`) VALUES ('$Type',(SELECT ID FROM users WHERE users.email='$email'),'$To','$Title','$Description','$Date')"))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function insertImage($data = array()) {
        if(!empty($data)){

            // Insert gallery data
            $insert = $this->db->insert_batch("picture", $data);

            // Return the status
            return $insert?$this->db->insert_id():false;
        }
        return false;
    }

    public function updateStorage($email, $data){
        $data=$this->db->query("UPDATE `users` SET `storage_used`=`storage_used`+'$data' WHERE users.email='$email' ");
        return true;
    }

    public function decreaseStorage($email, $data){
        $data=$this->db->query("UPDATE `users` SET `storage_used`=`storage_used`-'$data' WHERE users.email='$email' ");
        return true;
    }

    public function updateVolume($email, $data){
        $data=$this->db->query("UPDATE `users` SET `data_used_today`=`data_used_today`+'$data' WHERE users.email='$email' ");
        return true;
    }
}
?>