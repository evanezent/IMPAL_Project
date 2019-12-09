<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['events'] = $this->Event_model->getEvent();
		$data['tickets'] = $this->Ticket_model->getTicket();
		$data['payments'] = $this->Payment_model->select();
		$this->load->view('template/header_admin',$data);
		$this->load->view('admin/admin');
		$this->load->view('template/footer_admin');
	}

	public function login()
	{
		$data['salah'] = 0;
		$this->load->view('template/header_admin');
		$this->load->view('admin/login_admin', $data);
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
		}else{
			$data['salah'] = 2;
			$this->load->view('template/header_admin');
			$this->load->view('admin/login_admin', $data);
			$this->load->view('template/footer_admin');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}

	public function validationAcceptEvent($id)
	{
		$this->Event_model->validationAccept($id);
	}

	public function validationDeclineEvent($id)
	{
		$this->Event_model->validationDecline($id);
	}

	public function validationAcceptTicket($id)
	{
		$this->Ticket_model->validationAccept($id);
	}

	public function validationDeclineTicket($id)
	{
		$this->Ticket_model->validationDecline($id);
	}

	public function deleteTime()
	{
		$events = $this->Event_model->getEvent();
		$tickets = $this->Ticket_model->getTicket();

		foreach ($events as $e) {
			if (strtotime(date("Y-m-d")) > strtotime($e['tanggalEvent'])){
				$tanggal_hapus = date("Y-m-d");
				$this->Event_model->deleteEvent($e['idEvent'], $tanggal_hapus);
			}
		}

		foreach ($tickets as $t) {
			if (strtotime(date("Y-m-d")) > strtotime($t['tanggalTicket'])){
				$tanggal_hapus = date("Y-m-d");
				$this->Ticket_model->deleteTicket($t['idTicket'], $tanggal_hapus);
			}
		}
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */