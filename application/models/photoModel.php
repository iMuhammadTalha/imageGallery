<?php

class photoModel extends CI_Model
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
        return $data;
    }

      function userAllImages($email)       //Getting Records of only that students whose  is that user.
    {
        $data=$this->db->query("SELECT picture.id, picture.image_path, picture.date_time, picture.size FROM `picture` JOIN users ON users.id=picture.user_id WHERE users.email='$email' ");
        return $data;
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

}
?>