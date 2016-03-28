<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent:: __construct();

		// if ($this->session->userdata('user_logged')) {
  //       redirect('dashboard');
		// }
	}

	public function index()
	{
		//$data['main_content'] = $this->load->view('main_content', '', TRUE);
		$this->load->view('login');
	}

	public function registration(){
		$data['main_content'] = $this->load->view('register', '', TRUE);
		$this->load->view('master', $data);
	}

	public function forget_password(){
		$this->load->view('forget_password');
	}

	public function reset_password(){
		$this->load->view('reset_password');
	}

	public function logout(){
		$this->session->sess_destroy();

		$login_msg['seccess']="Successfully Loged Out";
        $this->session->set_userdata($login_msg);

        redirect('/', 'refresh');
	}
}
