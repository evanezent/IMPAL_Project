<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
    }
    
    public function login(){
        
    }

    public function testLogin(){
        echo 'Unit Testing Login';
        $test = $this->login();
        $expected_result = True;
        $test_name = 'login dengan angka';
        echo $this->unit->run($test,$expected_result,$test_name);
    }

    public function index()
    {

    }

}

/* End of file Controllername.php */