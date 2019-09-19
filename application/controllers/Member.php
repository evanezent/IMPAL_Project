<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('Event_model');
	}
	public function index()
	{
		$this->load->view('template/header_member');
		$this->load->view('user/data');
		$this->load->view('template/footer_member');
	}

	public function payment()
	{
		$this->load->view('template/header_member');
		$this->load->view('user/payment');
		$this->load->view('template/footer_member');
	}

	public function confirm_payment()
	{
		$this->load->view('template/header_member');
		$this->load->view('user/confirm_payment');
		$this->load->view('template/footer_member');
	}

	public function upload()
	{
		$config['upload_path'] = './upload/payment';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']  = '4096';
		$config['max_width']  = '1920';
		$config['max_height']  = '1080';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('page_submit', $error);
		} else {
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('page_submit', $data);
		}
	}
	public function insert_event()
	{
		//get foto
		ini_set('memory_limit','16M');
		$gambar = $_FILES['poster']['name'];
		if ($gambar) {
			$config['upload_path']          =  './upload/event';
			$config['allowed_types']        =  'gif|jpeg|jpg|png';
			$config['max_size']             =  1000000000000;
			$config['max_width']            =  5000;
			$config['max_height']           =  5000;

			$this->load->library('upload', $config);
			$foto = $this->upload->data();
			$namafile = $foto['file_name'];
			echo $namafile;
			if (!$this->upload->do_upload('poster')) {
				$error = array('error' => $this->upload->display_errors());
				echo $error;
			} else {
				// Random id
				$id = rand();
				$ada = $this->Event_model->searchId(($id));
				while ($ada) {
					$id = rand();
					$ada = $this->Event_model->searchId(($id));
				}
				$data = array(
					'idEvent' => $id,
					'username' => "SESSION", //harusnya diisi session user login
					'namaEvent' => $this->input->post('eventname'),
					'tanggalEvent' => $this->input->post('date'),
					'poster' => $namafile,
					'validasi' => 0,
					'delete_at' => 0 //diset jadi sebuah tanggal penghapusan, saat data tsb dihapus
				);
				$this->Event_model->inputEvent($data);
				redirect('Member', 'refresh');
			}
		} else {
			// Flash message foto kosong
			echo "GAMBAR KOSONG";
			// echo $error;
		}
	}
	public function insert_ticket()
	{
		//get foto
		$config['upload_path']          =  './upload/ticket';
		$config['allowed_types']        =  'gif|jpeg|jpg|png';
		$config['max_size']             =  1000000000000;
		$config['max_width']            =  5000;
		$config['max_height']           =  5000;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('poster')) {
			// Flash message foto kosong
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('page_submit', $error);
		} else {
			$foto = $this->upload->data();
			$namafile = $foto['file_name'];
			// Random id
			$id = rand();
			$ada = $this->Event_model->searchId(($id));
			while ($ada) {
				$id = rand();
				$ada = $this->Event_model->searchId(($id));
			}
			$data = array(
				'idTicket' => $id,
				'username' => "SESSION", //harusnya diisi session user login
				'namaTicket' => $this->input->post('ticketname'),
				'tanggalTicket' => $this->input->post('date'),
				'poster' => $namafile,
				'contactPerson' => $this->input->post('contactperson'),
				'Validasi' => 0,
				'delete_at' => 0 //diset jadi sebuah tanggal penghapusan, saat data tsb dihapus
			);
			$this->Ticket_model->inputTicket($data);
			redirect('Member', 'refresh');
		}
	}
}
