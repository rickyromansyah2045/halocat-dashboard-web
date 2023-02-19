<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Home';
		$this->load->view('home', $data);
	}

	public function about()
	{
		$data['title'] = "About";
		$this->load->view('about', $data);
	}

	public function donation()
	{
		$data['title'] = "List of Donations";
		$this->load->view('donation', $data);
	}

	public function donation_detail($test)
	{
		$data['title'] = "Donation Detail";
		$this->load->view('donation_detail', $data);
	}

}
