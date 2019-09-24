<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ticket_model extends CI_Model {
    public function select(){
        $this->db->select('*');
        $this->db->from('ticket');
        $query = $this->db->get();
        return $query->result();   
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
        $this->db->where('username',$username);
        $resultSet = $this->db->get('ticket');
        return $resultSet->result_array();
    }
}
?>