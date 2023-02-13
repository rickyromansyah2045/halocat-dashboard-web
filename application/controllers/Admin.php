<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

		if ($this->session->has_userdata('id') == null) {
            redirect('auth/login');
        }

        if ($this->session->userdata('role') == "user") {
            redirect('user/dashboard');
        }
	}

    public function dashboard()
	{
		$data['title'] = "Admin Dashboard";

		$this->load->view('admin/dashboard/index', $data);
	}

    public function campaigns()
	{
		$data['title'] = "Campaigns";

		$this->load->view('admin/campaigns/index', $data);
	}
}