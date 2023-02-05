<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('slicing');
		$this->load->view('template/footer_home');
	}

	public function about()
	{
		$this->load->view('template/header_home');
		$this->load->view('about');
		$this->load->view('template/footer_home');
	}

	public function donation_list()
	{
		$this->load->view('template/header_home');
		$this->load->view('donation_list');
		$this->load->view('template/footer_home');
	}

}
