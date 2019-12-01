<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['events'] = $this->Event_model->getEvent();
		$data['tickets'] = $this->Ticket_model->getTicket();
		$this->load->view('template/header_admin',$data);
		$this->load->view('admin/admin');
		$this->load->view('template/footer_admin');
	}

	public function login()
	{
		$this->load->view('template/header_admin');
		$this->load->view('admin/login_admin');
		$this->load->view('template/footer_admin');
	}

	public function login_db()
	{
		$username = $this->input->post('user-admin');
		$password = $this->input->post('pass-admin');
		if ($username == "admin" && $password == "1234567") {

			$data_session = array(
				'nama' => "Administrator",
				'status' => "login"
			);

			$this->session->set_userdata('user', $data_session);

			redirect(base_url("admin"));
		}else if ($username != "admin") {
			$this->session->set_flashdata('salah_admin', 'Password salah !');
			redirect(base_url("admin/login"));
		}else{
			$this->session->set_flashdata('salah_admin', 'Username salah !');
			redirect(base_url("admin/login"));
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}

	public function validationAccept($id)
	{
		$this->Event_model->validationAccept($id);
	}

	public function validationDecline($id)
	{
		$this->Event_model->validationDecline($id);
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */