<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('user/detail');
		$this->load->view('template/footer');
	}

}

/* End of file Post.php */
/* Location: ./application/controllers/Post.php */