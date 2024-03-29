<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ticket_model extends CI_Model {
    public function getTicket(){
        $query = $this->db->get('ticket');
        return $query->result_array();   
    }

    public function getTicketValidation(){
        $this->db->where('validasi', 1);
        $query = $this->db->get('ticket');
        return $query->result_array();   
    }

    public function getTicketID($id){
        $this->db->where('idTicket', $id);
        $query = $this->db->get('ticket');
        return $query->result_array();
    }

    public function inputTicket($data)
    {
        $this->db->insert('ticket', $data);
    }

    // Check if the ID is already exists
    public function searchId($id)
    {
        if($this->db->where('idTicket', $id)){
            return true;
        }else{
            return false;
        }
    }

    public function getTicketMember($username)
    {
        $where = "username LIKE '".$username."' AND delete_at IS NULL";
        $this->db->where($where);
        $resultSet = $this->db->get('ticket');
        return $resultSet->result_array();
    }

    public function deleteTicket($id, $tanggal)
    {
        $this->db->where('idTicket', $id);
        $date['delete_at'] = $tanggal;
        $this->db->update('ticket', $date);
    }

    public function editTicket($id, $data)
    {
        $this->db->where('idTicket', $id);
        $this->db->update('ticket', $data);
    }

    public function SearchTicket(){
        $keyword = $this->input->post('keyword');
        $this->db->select('*');
        $this->db->from('ticket');
        $this->db->like('namaTicket',$keyword);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function validationAccept($id)
    {
        $this->db->where('idTicket', $id);
        $data['validasi'] = 1;
        $this->db->update('ticket', $data);
        redirect('Admin','refresh');
    }

    public function validationDecline($id)
    {
        $this->db->where('idTicket', $id);
        $data['validasi'] = 0;
        $this->db->update('ticket', $data);
        redirect('Admin','refresh');
    }
}
?>