<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


	public function login()
	{
		echo "login";
        die;
		$this->load->view('template/footer_home');
	}

	public function register()
	{
		echo "Registration";
        die;
		$this->load->view('template/footer_home');
	}
    
}
