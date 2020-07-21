<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of add_new_task_model
 *
 * @author dell
 */
class Task_model extends CI_Model
{
      function __construct() 
    {
         
      parent::__construct();
     }
     function add_new_task($data)
     {
       return $this->db->insert("task",$data); 
     }
     public function get_all_tasks()
     {         
        $this->db->select("*");
        $this->db->from("task");      
         $query=$this->db->get();
        $resultarray=$query->result_array(); 
        return $resultarray;
     }
     function add_new_lead($data)
     {
       return $this->db->insert("lead",$data); 
     }
     public function get_all_lead()
     {
        $this->db->select("*");
        $this->db->from("lead");      
        $query=$this->db->get();
        $resultarray=$query->result_array();
        $final_array = array();
        foreach($resultarray as $result)
        {
            $result['contact_name'] = $this->getContactName($result['contact']);
            $final_array[] = $result;
        }
        
        return $final_array;
     }
     public function getContactName($id)
     {
        $this->db->select("firstname,secondname");
        $this->db->from("user_register");
        $this->db->where('user_id',$id);
        $query=$this->db->get();
        $resultarray=$query->result_array();
        return $resultarray[0]['firstname']." ".$resultarray[0]['secondname'];
        
     }
     public function changeStatus($task_id,$status)
     { //echo $task_id;die();
         $data['status'] = $status;
         $this->db->where('task_id',$task_id);
         return $this->db->update('task',$data);
     }
}

