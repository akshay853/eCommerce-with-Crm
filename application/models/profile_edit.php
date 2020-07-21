<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of profile_edit
 *
 * @author dell
 */
class profile_edit extends CI_Model
{
    public function update_staff_profile($add,$username)
    {
        $this->db->where("username",$username);
        $this->db->update("staff_register",$add);
    }
    public function update_user_profile($data,$username)
    {
          $this->db->where("username",$username);
          $this->db->update("user_register",$data);
          
          
    }
    public function update_seller_profile($data,$username)
    {
        $this->db->where("username",$username);
        $this->db->update("seller_register",$data);
    }
    public function add_new_task()
    {
        
        $this->db->where("username",$username);
        $this->db->update("staff_register",$add);
    }
}
