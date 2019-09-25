<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
	public function index()
	{
		//Sementara username getEvent dan getTicket pake esmeralda
		//Harusnya diisi username dari session
		$event = $this->Event_model->getEventMember("esmeralda");
		$ticket = $this->Ticket_model->getTicketMember("esmeralda");

		$data = [
			'events'=>$event,
			'tickets'=>$ticket
		];
		$this->load->view('template/header_member');
		$this->load->view('user/data',$data);
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
		$gambar = $_FILES['poster']['name'];
		if ($gambar) {
			$config['upload_path']          =  './upload/event';
			$config['allowed_types']        =  'gif|jpeg|jpg|png';
			$config['max_size']             =  1000000000000;
			$config['max_width']            =  5000;
			$config['max_height']           =  5000;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('poster')) {
				$error = array('error' => $this->upload->display_errors());
				echo $error;
				$this->session->set_flashdata('fail_evt', 'Fail event');
				redirect('Member', 'refresh');
			} else {
				// Get file name
				$foto = $this->upload->data();
				$namafile = $foto['file_name'];
				// Random id
				$id = "evt-" . random_string('alnum', 5); //rand(0000, 9999);
				//Check ID
//TODO : Search duplicate ID belum jalan
				// $ada = $this->Event_model->searchId(($id));
				// while ($ada) {
				// 	$id = random_string('alnum', 5);
				// 	$ada = $this->Event_model->searchId(($id));
				// }
				$data = array(
					'idEvent' => $id,
					'username' => "esmeralda", //harusnya diisi session user login
					'namaEvent' => $this->input->post('eventname'),
					'tanggalEvent' => $this->input->post('date'),
					'poster' => $namafile,
					'Validasi' => 0//diset jadi sebuah tanggal penghapusan, saat data tsb dihapus
				);
				$this->Event_model->inputEvent($data);
				$this->session->set_flashdata('sukses_evt', 'Success event');
				redirect('Member', 'refresh');
			}
		} else {
			// Flash message foto kosong
			echo "GAMBAR KOSONG";
			$this->session->set_flashdata('fail_pic', 'Fail pic');
			redirect('Member', 'refresh');
			// echo $error;
		}
	}
	public function delete_event($id)
	{
		$tanggal_hapus = date("Y-m-d");
		$this->Event_model->deleteEvent($id, $tanggal_hapus);
		$this->session->set_flashdata('deleted_event', 'Deleted !');
		redirect('Member', 'refresh');
	}
	public function insert_ticket()
	{
		$gambar = $_FILES['poster']['name'];
		if ($gambar) {
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
				echo $error;
				$this->session->set_flashdata('fail_tkt', 'Success ticket');
				redirect('Member', 'refresh');
			} else {
				$foto = $this->upload->data();
				$namafile = $foto['file_name'];
				// Random id
				$id = "tkt-" . random_string('alnum', 5);
				//TODO : Search duplicate ID belum jalan
				// $ada = $this->Event_model->searchId(($id));
				// while ($ada) {
				// 	$id = "tkt-" . rand(0000, 9999);
				// 	$ada = $this->Event_model->searchId(($id));
				// }
				$data = array(
					'idTicket' => $id,
					'username' => "esmeralda", //harusnya diisi session user login
					'namaTicket' => $this->input->post('ticketname'),
					'tanggalTicket' => $this->input->post('date'),
					'poster' => $namafile,
					'contactPerson' => $this->input->post('contactperson'),
					'Validasi' => 0 //diset jadi sebuah tanggal penghapusan, saat data tsb dihapus
				);
				$this->Ticket_model->inputTicket($data);
				$this->session->set_flashdata('sukses_tkt', 'Success ticket');
				redirect('Member', 'refresh');
			}
		}else{
			// Flash message foto kosong
			echo "GAMBAR KOSONG";
			$this->session->set_flashdata('fail_pic', 'Fail pic');
			redirect('Member', 'refresh');
			// echo $error;
		}
	}
}
