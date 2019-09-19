<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Event_model extends CI_Model {
    public function select(){
        $this->db->select('*');
        $this->db->from('event');
        $query = $this->db->get();
        return $query->result();   
    }
    public function getEvent()
    {
        $this->db->select('*');
        $this->db->from('event');
        
        $query = $this->db->get();
        return $query->result();   
    }
    public function inputEvent($data)
    {
        $this->db->insert('events', $data);
    }
    // Check if the ID is already exists
    public function searchId($id)
    {
        if($this->db->where('idEvent', $id)){
            return true;
        }else{
            return false;
        }
    }
}
?>