<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}	


	public function login()
	{
		$data['title'] = "Login";

		$this->load->view('auth/login', $data);
	}
	
	public function register()
	{
		$data['title'] = "Register";

		$this->load->view('auth/register', $data);
	}

	public function forgot_password()
	{
		$data['title'] = "Forgot Password";

		$this->load->view('auth/forgot_password', $data);
	}

	public function proses_login()
	{

		$data = $this->input->post();

		$email 		= $data['email'];
		$password 	= $data['password'];

		$post_field = [
			"email" => $email,
			"password" => $password
		];

		$post_field = json_encode($post_field);
		$curl = curl_init();
		$url = 'http://localhost:1315/api/v1/users/login';

		curl_setopt_array($curl, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => $post_field,
		CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json'
		),
		));

		$response = curl_exec($curl);

		
		curl_close($curl);

		$curl = curl_init();
		$result = json_decode($response, true);

		if($result['success'] == true){
			$data_response = [
				'message' => $result['message'],
				'status' => $result['success'],
				'id' => $result['data']['id'],
				'name' => $result['data']['name'],
				'email' => $result['data']['email'],
				'token' => $result['data']['token']
			];
			echo json_encode($data_response);
		}else{
			$data_response = [
				'message' => $result['message'],
				'status' => $result['success'],
				'error' => $result['error']
			];
			echo json_encode($data_response);
		}

	}

	public function proses_register()
	{

		$data = $this->input->post();

		$first_name = $data['firstname'];
		$last_name 	= $data['lastname'];
		$email 		= $data['email'];
		$password 	= $data['password'];

		$post_field = [
			"name" 	=> $first_name." ".$last_name,
			"email" => $email,
			"password" => $password
		];

		$post_field = json_encode($post_field);
		$curl = curl_init();
		$url = 'http://localhost:1315/api/v1/users/register';

		curl_setopt_array($curl, array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => $post_field,
		CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json'
		),
		));

		$response = curl_exec($curl);

		
		curl_close($curl);

		$curl = curl_init();
		$result = json_decode($response, true);

		if($result['success'] == true){
			$data_response = [
				'message' => $result['message'],
				'status' => $result['success'],
				'id' => $result['data']['id'],
				'name' => $result['data']['name'],
				'email' => $result['data']['email'],
				'token' => $result['data']['token']
			];
			echo json_encode($data_response);
		}else{
			$data_response = [
				'message' => $result['message'],
				'status' => $result['success'],
				'error' => $result['error']
			];
			echo json_encode($data_response);
		}

	}

	public function alive($data) {
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}

	public function dashboard()
	{
		$this->load->library('session');
		$data = $this->input->post();

		if(!isset($_SESSION)) 
		{ 
			session_start(); 
		} 

		if (empty($_SESSION)) {
            echo '<script type="text/javascript">'; 
            echo 'window.location.href="'. base_url() .'auth/login";';
            echo '</script>';
			exit;
        }

		$data['title'] = "Dashboard";

		$this->load->view('dashboard/dashboard', $data);

	}

	public function logout()
	{
		$this->load->library('session');
 
		unset($_SESSION);
		echo '<script type="text/javascript">'; 
		echo 'window.location.href="'. base_url() .'auth/login";';
		echo '</script>';
		exit;

	}
    
}
