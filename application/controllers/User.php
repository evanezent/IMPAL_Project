<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('user/homepage_event');
		$this->load->view('template/footer');
	}

	public function ticket()
	{
		$this->load->view('template/header');
		$this->load->view('user/homepage_ticket');
		$this->load->view('template/footer');
	}

	public function register()
	{
		$this->load->view('template/header');
		$this->load->view('user/register');
		$this->load->view('template/footer');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */