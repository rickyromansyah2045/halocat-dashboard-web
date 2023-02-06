<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function login()
	{
		$data['title'] = "Login";

		$this->load->view('auth/login', $data);
	}
	
	public function register()
	{
		$data['title'] = "Register";

		$this->load->view('auth/register', $data);
	}

	public function forgot_password()
	{
		$data['title'] = "Forgot Password";

		$this->load->view('auth/forgot_password', $data);
	}
    
}
