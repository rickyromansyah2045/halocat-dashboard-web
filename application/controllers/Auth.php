<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function login()
	{
		$this->load->view('auth/header_auth');
		$this->load->view('auth/login');
		$this->load->view('auth/footer_auth');
	}
	
	public function register()
	{
		$this->load->view('auth/header_auth');
		$this->load->view('auth/register');
		$this->load->view('auth/footer_auth');
	}

	public function forgot_password()
	{
		$this->load->view('auth/header_auth');
		$this->load->view('auth/forgot_password');
		$this->load->view('auth/footer_auth');
	}
    
}
