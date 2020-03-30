<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('login_model');

	}

	public function index()
	{
		$this->load->view('templates/header_login');
		$this->load->view('login');
		$this->load->view('templates/footer_login');
	}

	public function proses_login()
	{
		$username=$this->input->post('uname');
		$password=$this->input->post('pwd');

		$ceklogin=$this->login_model->login($username,$password);

		if ($ceklogin) {
			foreach ($ceklogin as $row);
				$this->session->set_userdata('user',$row->username);
			redirect('obat');
		} else {
			$this->load->view('templates/header_login');
			$this->load->view('login');
			$this->load->view('templates/footer_login');
			//redirect('login/index','refresh');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login','refresh');
	}


}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */