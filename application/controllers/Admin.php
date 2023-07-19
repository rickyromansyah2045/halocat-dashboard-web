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
		$data['content'] = $this->load->view('admin/users/index', NULL, TRUE);
		$data['custom_script'] = $this->load->view('admin/users/index_script', NULL, TRUE);

		$this->load->view('admin/base', $data);
	}

	public function categories()
	{
		$data['title'] = "Categories";
		$data['content'] = $this->load->view('admin/categories/index', NULL, TRUE);
		$data['custom_script'] = $this->load->view('admin/categories/index_script', NULL, TRUE);

		$this->load->view('admin/base', $data);
	}

    public function contents()
	{
		$data['title'] = "Contents";
		$data['content'] = $this->load->view('admin/contents/index', NULL, TRUE);
		$data['custom_script'] = $this->load->view('admin/contents/index_script', NULL, TRUE);


		$this->load->view('admin/base', $data);
	}

	public function logs_activity()
	{
		$data['title'] = "Activity Logs";
		$data['content'] = $this->load->view('admin/logs/activity', NULL, TRUE);
		$data['custom_script'] = $this->load->view('admin/logs/activity_script', NULL, TRUE);

		$this->load->view('admin/base', $data);
	}

	public function settings()
	{
		$data['title'] = "Account Setting";
		$data['content'] = $this->load->view('admin/settings/index', $data, TRUE);
		$data['custom_script'] = $this->load->view('admin/settings/index_script', NULL, TRUE);

		$this->load->view('admin/base', $data);
	}

	
}