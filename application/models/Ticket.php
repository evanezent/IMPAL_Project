<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ticket extends CI_Model {
    public function select(){
        $this->db->select('*');
        $this->db->from('ticket');
        $query = $this->db->get();
        return $query->result();   
    }
}
?>