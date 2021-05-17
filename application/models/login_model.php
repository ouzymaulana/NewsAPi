<?php

class Login_model extends CI_Model
{
    public function getDataByUsername($username)
    {

        $login = $this->db->get_where('petugas', ['username' => $username])->row_array();
        return $login;
        
        
    }
}