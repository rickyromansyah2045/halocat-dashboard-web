<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Home';
		$this->load->view('landingpage', $data);
	}

	public function about()
	{
		$data['title'] = "About";
		$this->load->view('about', $data);
	}

	public function donation()
	{
		$data['title'] = "Donation List";
		$this->load->view('donation', $data);
	}

}
