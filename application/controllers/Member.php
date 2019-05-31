<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
	public function index()
	{
		$this->load->view('template/header_member');
		$this->load->view('user/data');
		$this->load->view('template/footer_member');
	}
	public function payment()
	{
		$this->load->view('template/header_member');
		$this->load->view('user/payment');
		$this->load->view('template/footer_member');
	}
}
