<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		// require('Admin.php');
		// $admin = new Admin();
		// $admin->deleteTime();

		$data['salah'] = 0;
		$data['events'] = $this->Event_model->getEvent();
		$this->load->view('template/header', $data);
		$this->load->view('user/homepage_event');
		$this->load->view('template/footer');
	}

	public function ticket()
	{
		$data['salah'] = 0;
		$data['tickets'] = $this->Ticket_model->getTicket();
		$this->load->view('template/header', $data);
		$this->load->view('user/homepage_ticket');
		$this->load->view('template/footer');
	}

	public function register()
	{
		$data['salah'] = 0;
		$this->load->view('template/header', $data);
		$this->load->view('user/register');
		$this->load->view('template/footer');
	}

	public function register_db()
	{
		$username = $this->input->post('username', true);
		$user = $this->Member_model->searchUsername($username);
		
		if (empty($user)) {
			$data = [
				"username" => $this->input->post('username', true),
				"namaMember" => $this->input->post('fullname', true),
				"email" => $this->input->post('email', true),
				"password" => md5($this->input->post('password', true)),
				"alamat" => $this->input->post('alamat', true),
				"noHp" => $this->input->post('phone', true),
			];
			$this->Member_model->register($data);
			$data['salah'] = 1;
			$this->load->view('template/header', $data);
			$this->load->view('user/register');
			$this->load->view('template/footer');
		} else {
			$data['salah'] = 3;
			$this->load->view('template/header', $data);
			$this->load->view('user/register');
			$this->load->view('template/footer');
		}
	}

	public function login()
	{
		$this->load->view('template/header');
		$this->load->view('user/register');
		$this->load->view('template/footer');
	}

	public function login_db()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->Member_model->cek_login("member", $where)->num_rows();
		if ($cek > 0) {

			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata('user', $data_session);

			redirect(base_url("member"));
		} else {
			$event = $this->Event_model->getEvent();
			$ticket = $this->Ticket_model->getTicket();

			$data['events'] = $this->Event_model->getEvent();
			$data['salah'] = 2;
			$this->load->view('template/header', $data);
			$this->load->view('user/homepage_event');
			$this->load->view('template/footer');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('User');
	}

	public function searchEvent()
	{
		$data['events'] = $this->Event_model->SearchEvent();
		$data['salah'] = 0;
		$this->load->view('template/header', $data);
		$this->load->view('user/homepage_event');
		$this->load->view('template/footer');
	}

	public function searchTicket()
	{
		$data['tickets'] = $this->Ticket_model->SearchTicket();
		$data['salah'] = 0;
		$this->load->view('template/header', $data);
		$this->load->view('user/homepage_ticket');
		$this->load->view('template/footer');
	}

	public function forbiden()
	{
		$this->session->set_flashdata('login_first', 'Silahkan login terlebih dahulu');
		redirect('User');
	}
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
