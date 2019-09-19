<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends CI_Controller{

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

	public function upload(){
        $config['upload_path'] = './assets/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']  = '4096';
        $config['max_width']  = '1920';
        $config['max_height']  = '1080';
        
        $this->load->library('upload', $config);
        
        if (!$this->upload->do_upload('userfile')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('page_submit', $error);
        }
        else{
            $data = array('upload_data' => $this->upload->data());
            $this->load->view('page_submit', $data);
        }
    }
}
