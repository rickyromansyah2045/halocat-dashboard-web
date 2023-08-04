<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model(array('ChatModel','UserModel'));
		$this->load->helper('string');

        if ($this->session->has_userdata('id') == null) {
            redirect('auth/login');
        }

        if ($this->session->userdata('role') == "admin") {
            redirect('admin/dashboard');
        } else if ($this->session->userdata('role') == "user"){
            redirect('user/dashboard');
		}
	}

    public function index()
	{
		redirect('dokter/dashboard');
	}

    public function dashboard()
	{
		$data['title'] = "Dashboard";
        $data['content'] = $this->load->view('dokter/dashboard/index', NULL, TRUE);
		$data['custom_script'] = $this->load->view('dokter/dashboard/index_script', NULL, TRUE);

		$this->load->view('dokter/base', $data);
	}

    public function contents()
	{
		$data['title'] = "Contents";
		$data['content'] = $this->load->view('dokter/contents/index', NULL, TRUE);
		$data['custom_script'] = $this->load->view('dokter/contents/index_script', NULL, TRUE);

		$this->load->view('dokter/base', $data);
	}

	public function categories()
	{
		$data['title'] = "Categories";
		$data['content'] = $this->load->view('dokter/categories/index', NULL, TRUE);
		$data['custom_script'] = $this->load->view('dokter/categories/index_script', NULL, TRUE);

		$this->load->view('dokter/base', $data);
	}

    public function settings()
	{
		$data['title'] = "Account Setting";
		$data['content'] = $this->load->view('dokter/settings/index', $data, TRUE);
		$data['custom_script'] = $this->load->view('dokter/settings/index_script', NULL, TRUE);

		$this->load->view('dokter/base', $data);
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