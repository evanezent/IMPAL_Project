<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
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

	public function register_db()
	{
		$data = [
			"username" => $this->input->post('username', true),
			"namaMember" => $this->input->post('fullname', true),
            "email" => $this->input->post('email', true),
            "password" => $this->input->post('password', true),
            "alamat" => $this->input->post('alamat', true),
            "noHp" => $this->input->post('phone', true),
		];
		$this->Member_model->register($data);
		redirect('User','refresh');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */