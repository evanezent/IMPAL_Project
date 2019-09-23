<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Event_model extends CI_Model {
    public function getEvent(){
        $this->db->select('*');
        $this->db->from('events');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getEventID($id){
        $this->db->where('idEvent', $id);
        $this->db->from('events');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function inputEvent($data)
    {
        $this->db->insert('events', $data);
    }

    // Check if the ID is already exists
    public function searchId($id)
    {
        $this->db->where('idEvent', $id);
        $data = $this->db->get('events');
        if($data){
            return true;
        }else{
            return false;
        }
    }
}
?>