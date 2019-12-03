<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Event_model extends CI_Model {
    public function getEvent(){
        $query = $this->db->get('events');
        return $query->result_array();
    }

    public function getEventValidation(){
        $this->db->where('validasi', 1);
        $query = $this->db->get('events');
        return $query->result_array();
    }

    public function getEventID($id){
        $this->db->where('idEvent', $id);
        $query = $this->db->get('events');
        return $query->result_array();
    }

    public function getEventMember($username)
    {
        $condition = "username LIKE '".$username."' AND delete_at IS NULL";
        $this->db->where($condition);
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

    public function editEvent($id, $data)
    {
        $this->db->where('idEvent', $id);
        $this->db->update('events', $data);
    }

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

    public function SearchEvent(){
        $keyword = $this->input->post('keyword',true);
        $this->db->select('*');
        $this->db->from('events');
        $this->db->like('namaEvent',$keyword);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function validationAccept($id)
    {
        $this->db->where('idEvent', $id);
        $data['validasi'] = 1;
        $this->db->update('events', $data);
        redirect('Admin','refresh');
    }

    public function validationDecline($id)
    {
        $this->db->where('idEvent', $id);
        $data['validasi'] = 0;
        $this->db->update('events', $data);
        redirect('Admin','refresh');
    }

}
?>