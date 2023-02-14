<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if ($this->session->has_userdata('id') == null) {
            redirect('auth/login');
        }

        if ($this->session->userdata('role') == "admin") {
            redirect('admin/dashboard');
        }
	}

    public function index()
	{
		redirect('user/dashboard');
	}

    public function dashboard()
	{
		$data['title'] = "Dashboard";
        $data['content'] = $this->load->view('user/dashboard/index', NULL, TRUE);

		$this->load->view('user/base', $data);
	}

    public function campaigns()
	{
		$data['title'] = "Campaigns";

		$this->load->view('user/base', $data);
	}

    public function transactions()
	{
		$data['title'] = "Transactions";

		$this->load->view('user/base', $data);
	}
}
