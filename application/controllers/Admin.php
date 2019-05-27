<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header_admin');
		$this->load->view('admin/admin_event');
		$this->load->view('template/footer');
	}
	public function ticket()
	{
		$this->load->view('template/header_admin');
		$this->load->view('admin/admin_ticket');
		$this->load->view('template/footer');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */