<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment_model extends CI_Model {
    public function select(){
        $this->db->select('*');
        $this->db->from('payment');
        $query = $this->db->get();
        return $query->result();   
    }
}
?>