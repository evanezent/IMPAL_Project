<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header_admin');
		$this->load->view('admin/admin');
		$this->load->view('template/footer_admin');
	}

	public function login()
	{
		$this->load->view('template/header_admin');
		$this->load->view('admin/login_admin');
		$this->load->view('template/footer_admin');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */