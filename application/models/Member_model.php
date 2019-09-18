<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Member_model extends CI_Model {
    public function select(){
        $this->db->select('*');
        $this->db->from('member');
        $query = $this->db->get();
        return $query->result();   
    }

    public function register($data){
        $query = $this->db->insert('member', $data);
        return $query;
    }
	
	public function cek_login($table,$where)
	{
		return $this->db->get_where($table,$where);
	}
}
?>
