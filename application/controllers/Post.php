<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
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
		$this->load->view('template/header');
		$this->load->view('user/detail_event');
		$this->load->view('template/footer');
	}

	public function ticket()
	{
		$this->load->view('template/header');
		$this->load->view('user/detail_ticket');
		$this->load->view('template/footer');
	}
}

/* End of file Post.php */
/* Location: ./application/controllers/Post.php */