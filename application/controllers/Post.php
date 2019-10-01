<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('user/detail_event');
		$this->load->view('template/footer');
	}

	public function ticket($id)
	{
		$data['ticket']=$this->Ticket_model->getTicketID($id);
		$this->load->view('template/header');
		$this->load->view('user/detail_ticket');
		$this->load->view('template/footer');
	}
	public function event($id)
	{
		$data['events']=$this->Event_model->getEventID($id);
		$this->load->view('template/header');
		$this->load->view('user/detail_event',$data);
		$this->load->view('template/footer');
	}
}

/* End of file Post.php */
/* Location: ./application/controllers/Post.php */