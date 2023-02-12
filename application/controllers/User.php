<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}

    public function dashboard()
	{
		$this->load->library('session');

		if (!isset($_SESSION))
		{
            session_start();
		}

		if (empty($_SESSION)) {
            echo '<script type="text/javascript">';
            echo 'window.location.href="'. base_url() .'auth/login";';
            echo '</script>';
			exit;
        }

        $data = $this->input->post();
		$data['title'] = "Dashboard";

		$this->load->view('user/dashboard/index', $data);
	}
}
