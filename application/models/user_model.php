<?php
class user_model extends CI_Model
{
    function login($data){
//        die(var_dump($data));
        $this->db->select("type");
        $this->db->from("admin");
        $this->db->where("name",$data['name']);
        $this->db->where("password",$data['password']);
        return $this->db->get()->result_array();
//        var_dump($query);die();
//        echo $this->db->last_query();die();
//        $this->db->get()->result();

    }
    function  add_bloggeruser($data)
    {
        $this->db->select("*");
        $this->db->from("bloger_user");
        $this->db->where("username", $data['username']);
        $rows = $this->db->get()->num_rows();
        if ($rows <= 0){
            $this->db->insert('bloger_user', $data);
            return true;
        }else
            return false;
    }
}
