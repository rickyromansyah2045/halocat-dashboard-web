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

	public function index()
	{
		redirect('admin/dashboard');
	}

    public function dashboard()
	{
		$data['title'] = "Dashboard";
		$data['content'] = $this->load->view('admin/dashboard/index', NULL, TRUE);

		$this->load->view('admin/base', $data);
	}

	public function users()
	{
		$data['title'] = "Users";

		$this->load->view('admin/base', $data);
	}

	public function categories()
	{
		$data['title'] = "Categories";

		$this->load->view('admin/base', $data);
	}

    public function campaigns()
	{
		$data['title'] = "Campaigns";
		$data['content'] = $this->load->view('admin/campaigns/index', NULL, TRUE);
		$data['custom_script'] = $this->load->view('admin/campaigns/index_script', NULL, TRUE);


		$this->load->view('admin/base', $data);
	}

	public function transactions()
	{
		$data['title'] = "Transactions";

		$this->load->view('admin/base', $data);
	}

	public function logs_activity()
	{
		$data['title'] = "Logs Activity";

		$this->load->view('admin/base', $data);
	}
}