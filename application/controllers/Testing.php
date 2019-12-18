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

    public function confirm_payment()
	{
        $id_event = 'evt-owPu3';
        // $gambar = $_FILES['foto_bayar']['name'];
		$gambar = '';
		$user =  'pranapramudita';
		if ($gambar) {
			$config['upload_path']          =  './upload/payment';
			$config['allowed_types']        =  'gif|jpeg|jpg|png';
			$config['max_size']             =  1000000000000;
			$config['max_width']            =  5000;
			$config['max_height']           =  5000;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('upload/payment/fortnite-season-x-image-4k-3840x2160_477799-mm-90.jpg')) {
				// $error = array('error' => $this->upload->display_errors());
				// echo $error;
				// $this->session->set_flashdata('fail_evt', 'Fail event');
                // redirect('Member', 'refresh');
                $test = False;
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
                // redirect('Member', 'refresh');
                $test = True;
            }
		} else {
			// Flash message foto kosong
			// echo "GAMBAR KOSONG";
			$this->session->set_flashdata('fail_pic', 'Fail pic');
			// redirect('Member/payment/.echo $id_event', 'refresh');
            // echo $error;
            $test = False;
        }
        return $test;
	}

    public function testInputPayment(){
        echo 'Unit Testing Login';
        $test = $this->confirm_payment();
        // $expected_result = True;
        $expected_result = False;
        $test_name = 'Upload Gambar Kosong';
        echo $this->unit->run($test,$expected_result,$test_name);
    }

    public function index()
    {

    }

}

/* End of file Controllername.php */