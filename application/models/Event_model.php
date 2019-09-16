<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Event_model extends CI_Model {
    public function select(){
        $this->db->select('*');
        $this->db->from('event');
        $query = $this->db->get();
        return $query->result();   
    }
}
?>