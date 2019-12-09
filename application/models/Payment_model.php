<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Payment_model extends CI_Model {
    public function select(){
        $query = $this->db->get('payment');
        return $query->result_array();   
    }

    public function inputPayment($data){
        $this->db->insert('payment', $data);
    }
}
?>