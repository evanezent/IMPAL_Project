<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
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
		$this->load->view('template/header_admin');
		$this->load->view('admin/admin');
		$this->load->view('template/footer_admin');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */