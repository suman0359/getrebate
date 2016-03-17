<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent:: __construct();
		$this->load->model('auth_model');
	}

	public function check_login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$check_login = $this->auth_model->check_login($email, $password);
		
		$login_msg = array();

		if ($check_login!=NULL) {
			$login_msg['user_id'] 	= $check_login->id;
			$login_msg['username'] 	= $check_login->username;
			$login_msg['email'] 		= $check_login->email;
			$login_msg['firstname'] 	= $check_login->firstname;
			$login_msg['lastname'] 	= $check_login->lastname;
			$login_msg['user_role'] 	= $check_login->user_role;
			$login_msg['pass_reset_code'] 	= $check_login->pass_reset_code;
			$login_msg['mobile'] 	= $check_login->mobile;
			$login_msg['gender'] 	= $check_login->gender;
			$login_msg['country'] 	= $check_login->country;
			$login_msg['date_of_birth'] 	= $check_login->date_of_birth;
			$login_msg['address'] 	= $check_login->address;

			$this->session->set_userdata($login_msg);
            redirect('dashboard');
		}else{
            $login_msg['message']="You Enter Wrong Username Or Password";
            $this->session->set_userdata($login_msg);
            redirect('admin_login');
        }

	}

	/* ------------------------------------ */
}
