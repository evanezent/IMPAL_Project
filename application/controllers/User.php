<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('user/homepage');
		$this->load->view('template/footer');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */