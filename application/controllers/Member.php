<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller
{
	public function index()
	{
		//Sementara username getEvent dan getTicket pake esmeralda
		//Harusnya diisi username dari session
		$user =  $_SESSION['user'];
		$event = $this->Event_model->getEventMember($user['nama']);
		$ticket = $this->Ticket_model->getTicketMember($user['nama']);

		$data = [
			'events' => $event,
			'tickets' => $ticket
		];
		$this->load->view('template/header_member');
		$this->load->view('user/data', $data);
		$this->load->view('template/footer_member');
	}

	public function payment($id)
	{
		$data['salah'] = 0;
		$data['event'] = $this->Event_model->getEventID($id);
		$this->load->view('template/header_member',$data);
		$this->load->view('user/payment');
		$this->load->view('template/footer_member');
	}

	public function confirm_payment()
	{
		$id_event = $this->input->post('id_event');
		$gambar = $_FILES['foto_bayar']['name'];
		$user =  $_SESSION['user']['nama'];
		if ($gambar) {
			$config['upload_path']          =  './upload/payment';
			$config['allowed_types']        =  'gif|jpeg|jpg|png';
			$config['max_size']             =  1000000000000;
			$config['max_width']            =  5000;
			$config['max_height']           =  5000;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('foto_bayar')) {
				$error = array('error' => $this->upload->display_errors());
				echo $error;
				$this->session->set_flashdata('fail_evt', 'Fail event');
				redirect('Member', 'refresh');
			} else {
				$foto = $this->upload->data();
				$namafile = $foto['file_name'];
				// Random id
				$id = random_string('alnum', 5);

				$data = array(
					'idTransaksi' => $id,
					'idEvent' => $id_event,
					'username' => $user,
					'tanggalTransaksi' => date("Y-m-d"),
					'foto_bayar' => $namafile,
					'delete_at' => null
				);
				$this->Payment_model->inputPayment($data);
				$this->session->set_flashdata('sukses_evt', 'Success event');
				redirect('Member', 'refresh');
			}
		} else {
			// Flash message foto kosong
			echo "GAMBAR KOSONG";
			$this->session->set_flashdata('fail_pic', 'Fail pic');
			redirect('Member/payment/.echo $id_event', 'refresh');
			// echo $error;
		}
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

	public function insertEvent()
	{
		$user =  $_SESSION['user']['nama'];
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
				$foto = $this->upload->data();
				$namafile = $foto['file_name'];
				// Random id
				$id = "evt-" . random_string('alnum', 5);
				//Check ID
				//TODO : Search duplicate ID belum jalan
				// $ada = $this->Event_model->searchId(($id));
				// while ($ada) {
				// 	$id = random_string('alnum', 5);
				// 	$ada = $this->Event_model->searchId(($id));
				// }
				$data = array(
					'idEvent' => $id,
					'username' => $user, //harusnya diisi session user login
					'namaEvent' => $this->input->post('eventname'),
					'tanggalEvent' => $this->input->post('date'),
					'poster' => $namafile,
					'Validasi' => 0
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

	public function deleteEvent($id)
	{
		$tanggal_hapus = date("Y-m-d");
		$this->Event_model->deleteEvent($id, $tanggal_hapus);
		$this->session->set_flashdata('deleted_event', 'Deleted !');
		redirect('Member', 'refresh');
	}

	public function editEvent($id)
	{
		$data['events'] = $this->Event_model->getEventID($id);

		$this->load->view('template/header_member');
		$this->load->view('user/edit_event', $data);
		$this->load->view('template/footer_member');
	}

	public function editEventHandle()
	{
		$id = $this->input->post('idevent');
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
				$foto = $this->upload->data();
				$namafile = $foto['file_name'];
				//Check ID
				//TODO : Search duplicate ID belum jalan
				// $ada = $this->Event_model->searchId(($id));
				// while ($ada) {
				// 	$id = random_string('alnum', 5);
				// 	$ada = $this->Event_model->searchId(($id));
				// }
				$data = array(
					'namaEvent' => $this->input->post('eventname'),
					'tanggalEvent' => $this->input->post('date'),
					'poster' => $namafile
				);
				$this->Event_model->editEvent($id, $data);
				$this->session->set_flashdata('sukses_evt', 'Success event');
				redirect('Member', 'refresh');
			}
		} else {
			$data = array(
				'namaEvent' => $this->input->post('eventname'),
				'tanggalEvent' => $this->input->post('date')
			);

			$this->Event_model->editEvent($id, $data);
			$this->session->set_flashdata('sukses_evt', 'Success event');
			redirect('Member', 'refresh');
		}
	}

	public function insertTicket()
	{
		$gambar = $_FILES['poster']['name'];
		$user =  $_SESSION['user']['nama'];
		if ($gambar) {
			$config['upload_path']          =  './upload/ticket';
			$config['allowed_types']        =  'gif|jpeg|jpg|png';
			$config['max_size']             =  1000000000000;
			$config['max_width']            =  5000;
			$config['max_height']           =  5000;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('poster')) {
				$error = array('error' => $this->upload->display_errors());
				echo $error;
				$this->session->set_flashdata('fail_tkt', 'Success ticket');
				redirect('Member', 'refresh');
			} else {
				$foto = $this->upload->data();
				$namafile = $foto['file_name'];
				$id = "tkt-" . random_string('alnum', 5);
				//TODO : Search duplicate ID belum jalan
				// $ada = $this->Event_model->searchId(($id));
				// while ($ada) {
				// 	$id = "tkt-" . rand(0000, 9999);
				// 	$ada = $this->Event_model->searchId(($id));
				// }
				$data = array(
					'idTicket' => $id,
					'username' => $user, //harusnya diisi session user login
					'namaTicket' => $this->input->post('ticketname'),
					'tanggalTicket' => $this->input->post('date'),
					'poster' => $namafile,
					'contactPerson' => $this->input->post('contactperson'),
					'Validasi' => 0
				);
				$this->Ticket_model->inputTicket($data);
				$this->session->set_flashdata('sukses_tkt', 'Success ticket');
				redirect('Member', 'refresh');
			}
		} else {
			echo "GAMBAR KOSONG";
			$this->session->set_flashdata('fail_pic', 'Fail pic');
			redirect('Member', 'refresh');
		}
	}

	public function deleteTicket($id)
	{
		$tanggal_hapus = date("Y-m-d");
		$this->Ticket_model->deleteTicket($id, $tanggal_hapus);
		$this->session->set_flashdata('deleted_ticket', 'Deleted !');
		redirect('Member', 'refresh');
	}

	public function editTicket($id)
	{
		$data['tickets'] = $this->Ticket_model->getTicketID($id);

		$this->load->view('template/header_member');
		$this->load->view('user/edit_ticket', $data);
		$this->load->view('template/footer_member');
	}

	public function editTicketHandle()
	{
		$id = $this->input->post('idticket');
		$gambar = $_FILES['poster']['name'];

		if ($gambar) {
			$config['upload_path']          =  './upload/ticket';
			$config['allowed_types']        =  'gif|jpeg|jpg|png';
			$config['max_size']             =  1000000000000;
			$config['max_width']            =  5000;
			$config['max_height']           =  5000;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('poster')) {
				$error = array('error' => $this->upload->display_errors());
				echo $error['error'];
				$this->session->set_flashdata('fail_tkt', 'Fail ticket');
				// redirect('Member', 'refresh');
			} else {
				$foto = $this->upload->data();
				$namafile = $foto['file_name'];
				//Check ID
				//TODO : Search duplicate ID belum jalan
				// $ada = $this->Event_model->searchId(($id));
				// while ($ada) {
				// 	$id = random_string('alnum', 5);
				// 	$ada = $this->Event_model->searchId(($id));
				// }
				$data = array(
					'namaTicket' => $this->input->post('ticketname'),
					'tanggalTicket' => $this->input->post('date'),
					'poster' => $namafile,
					'contactPerson' => $this->input->post('contactperson')
				);
				$this->Ticket_model->editTicket($id, $data);
				$this->session->set_flashdata('sukses_tkt', 'Success Ticket');
				redirect('Member', 'refresh');
			}
		} else {
			$data = array(
				'namaTicket' => $this->input->post('ticketname'),
				'tanggalTicket' => $this->input->post('date'),
				'contactPerson' => $this->input->post('contactperson')
			);

			$this->Ticket_model->editTicket($id, $data);
			$this->session->set_flashdata('sukses_evt', 'Success Ticket');
			redirect('Member', 'refresh');
		}
	}
}
