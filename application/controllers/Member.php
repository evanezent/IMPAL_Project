<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function input_event()
	{
		$this->load->view('template/header_member');
		$this->load->view('user/input_event');
		$this->load->view('template/footer');
    }
    public function input_ticket()
	{
		$this->load->view('template/header_member');
		$this->load->view('user/input_ticket');
		$this->load->view('template/footer');
    }
    
}