<?php

class User_model extends CI_Model{
 
    public function create($form)
    {

       $this->db->insert('users', $form);
    }


    public function read(){
        $query=$this->db->get('users');
        return $query->result_array();
    }
}