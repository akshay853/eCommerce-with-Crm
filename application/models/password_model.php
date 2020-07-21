<?php

class Password_model extends CI_Model
{
   public function checkEmailExist($email,$type)
   {
       if ($type == "user") {

       $this->db->select("*");
       $this->db->from("user_register");
       $this->db->where('email', $email);
       $query = $this->db->get();
       $resultarray = $query->result_array();
       return $resultarray;
   }
   else if($type == "staff")
   {
       $this->db->select("*");
       $this->db->from("staff_register");
       $this->db->where('email', $email);
       $query = $this->db->get();
       $resultarray = $query->result_array();
       return $resultarray;
   }
   else if($type == "seller")
{
    $this->db->select("*");
    $this->db->from("seller_register");
    $this->db->where('email', $email);
    $query = $this->db->get();
    $resultarray = $query->result_array();
    return $resultarray;
   }
   else
   {
       return false;
   }



   }
    public function checkIDExist($id,$type)
    {
        if ($type == "user") {

            $this->db->select("*");
            $this->db->from("user_register");
            $this->db->where('user_id',$id);
            $query=$this->db->get();
            $resultarray=$query->result_array();
            return $resultarray;
        }
        else if($type == "staff")
        {
            $this->db->select("*");
            $this->db->from("staff_register");
            $this->db->where('staff_id',$id);
            $query=$this->db->get();
            $resultarray=$query->result_array();
            return $resultarray;
        }
        else if($type == "seller")
        {
            $this->db->select("*");
            $this->db->from("seller_register");
            $this->db->where('seller_id',$id);
            $query=$this->db->get();
            $resultarray=$query->result_array();
            return $resultarray;
        }
        else
        {
            return false;
        }







    }

    public function updatePassword($id,$type,$data)
    {

      //  echo $type;die();

        if ($type == "user") {

            $this->db->where("user_id",$id);
            return $this->db->update("user_register",$data);
        }
        else if($type == "staff")
        {
            $this->db->where("staff_id",$id);
            return $this->db->update("staff_register",$data);
        }
        else if($type == "seller")
        {
            $this->db->where("seller_id",$id);
            return $this->db->update("seller_register",$data);
        }
        else
        {
            return false;
        }

    }

    public function findThisEmail($email)
    {
        $this->db->select("*");
        $this->db->from("user_register");
        $this->db->where('email', $email);
        $query = $this->db->get();
        $uresultarray = $query->result_array();

        $this->db->select("*");
        $this->db->from("staff_register");
        $this->db->where('email', $email);
        $query = $this->db->get();
        $stresultarray = $query->result_array();

        $this->db->select("*");
        $this->db->from("seller_register");
        $this->db->where('email', $email);
        $query = $this->db->get();
        $seresultarray = $query->result_array();

        if($uresultarray || $stresultarray || $seresultarray)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }

    }


   
}

