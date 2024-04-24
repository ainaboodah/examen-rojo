<?php
class User extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function get_data(){
        $query = $this->db->get('user');
        return $query->result();
    }
}