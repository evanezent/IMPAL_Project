<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Event_model');
		$this->load->model('Ticket_model');
		$this->load->model('Member_model');
		$this->load->model('Payment_model');
		$this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('text');
        $this->load->helper('form','url');
	}

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

	public function confirm_payment()
	{
		$this->load->view('template/header_member');
		$this->load->view('user/confirm_payment');
		$this->load->view('template/footer_member');
	}
}
