<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['events']=$this->Event_model->getEvent();
		$this->load->view('template/header');
		$this->load->view('user/homepage_event',$data);
		$this->load->view('template/footer');
	}

	public function ticket()
	{
		$data['events']=$this->Ticket_model->getTicket();
		$this->load->view('template/header');
		$this->load->view('user/homepage_ticket',$data);
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
            "password" => md5($this->input->post('password', true)),
            "alamat" => $this->input->post('alamat', true),
            "noHp" => $this->input->post('phone', true),
		];
		$this->Member_model->register($data);
		redirect('User','refresh');
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
		$cek = $this->Member_model->cek_login("member",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata('user',$data_session);
 
			redirect(base_url("member"));
 
		}else{
			echo "Terjadi kesalahan input username/password";
			echo(md5($password));
		}

	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('User');
	}
	public function searchEvent(){
        $data['event']=$this->Event_model->SearchNamaEvent();
        $this->load->view('homepage_Event',$data);
	}
	public function searchTicket(){
        $data['ticket']=$this->Ticket_model->SearchNamaTicket();
        $this->load->view('homepage_Ticket',$data);
	}
	
}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
