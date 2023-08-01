<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model(array('ChatModel','UserModel'));
		// $this->SeesionModel->not_logged_in();
		// $this->load->helper('string');

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
		$data['custom_script'] = $this->load->view('user/dashboard/index_script', NULL, TRUE);

		$this->load->view('user/base', $data);
	}

    public function contents()
	{
		$data['title'] = "Contents";
		$data['content'] = $this->load->view('user/contents/index', NULL, TRUE);
		$data['custom_script'] = $this->load->view('user/contents/index_script', NULL, TRUE);

		$this->load->view('user/base', $data);
	}

    public function settings()
	{
		$data['title'] = "Account Setting";
		$data['content'] = $this->load->view('user/settings/index', $data, TRUE);
		$data['custom_script'] = $this->load->view('user/settings/index_script', NULL, TRUE);

		$this->load->view('user/base', $data);
	}

	public function chat() 
	{
		$data['title']		 = '';
		$data['strsubTitle'] = '';
		$data['chatTitle']	 = '';
		
		if($this->session->userdata('role') == "user"){
			$list = $this->UserModel->DoktersList();
			$data['title']		 = 'Chat Dokter';
			$data['strsubTitle'] = 'Dokter';
			$data['chatTitle']	 = 'Pilih Dokter Untuk di Chat';
		}else{
			$list = $this->UserModel->UserList();
			$data['title']		 = 'Chat Client';
			$data['strsubTitle'] = 'Client';
			$data['chatTitle']	 = 'Pilih Client';
		}

		$vendorslist=[];
		foreach($list as $u){
			$vendorslist[]=
			[
				'id' 	=>  $u['id'],
				'name' 	=> 	$u['name'],
			];
		}
		$data['vendorslist']=$vendorslist;

		$data['content'] = $this->load->view('user/chat/index', $data, TRUE);
		$data['custom_script'] = $this->load->view('user/chat/index_script', NULL, TRUE);

		$this->load->view('user/base', $data);
	}

}
