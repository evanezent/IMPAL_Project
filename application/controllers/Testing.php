<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
    }
    
    public function login_db() 
	{
        // // username dan password benar
		// $username = 'pranapramudita';
        // $password = '123456';

        // // username atau password salah
		// $username = 'pranapramudita';
        // $password = '12345';

        // username atau password kosong
		$username = '';
        $password = '12345';

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

            // redirect(base_url("member"));
            $test = True;
		} else {
			$event = $this->Event_model->getEvent();
			$ticket = $this->Ticket_model->getTicket();

			$data['events'] = $this->Event_model->getEvent();
			$data['salah'] = 2;
			// $this->load->view('template/header', $data);
			// $this->load->view('user/homepage_event');
            // $this->load->view('template/footer');
            $test = False;
        }
        if(is_null($username)){
            $test = False;
        }
        return $test;
    }
    
    public function testLogin(){
        echo 'Unit Testing Login';
        $test = $this->login_db();
        // $expected_result = True;
        $expected_result = False;
        $test_name = 'Username atau Password Kosong';
        echo $this->unit->run($test,$expected_result,$test_name);
    }

    public function index()
    {

    }

}

/* End of file Controllername.php */