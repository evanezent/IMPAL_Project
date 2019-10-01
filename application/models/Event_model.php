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
    public function getEventMember($username)
    {
        $where = "username LIKE '".$username."' AND delete_at IS NULL";
        $this->db->where($where);
        $resultSet = $this->db->get('events');
        return $resultSet->result_array();
    }
    public function inputEvent($data)
    {
        $this->db->insert('events', $data);
    }
    public function deleteEvent($id, $tanggal)
    {
        $this->db->where('idEvent', $id);
        $date['delete_at'] = $tanggal;
        $this->db->update('events', $date);
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
    public function SearchNamaEvent(){
        $keyword = $this->input->post('keyword', true);
        $where = "namaEvent like '%" .$keyword. "%' ";
        $this->db->select('*');
        $this->db->from('events');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result_array();
    }
}
?>