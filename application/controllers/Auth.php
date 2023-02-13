<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();

		if ($this->session->has_userdata('id') && $this->uri->segment(2) != "logout") {
			redirect('user/dashboard');
		}
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

		$email = $data['email'];
		$password = $data['password'];

		$post_field = [
			"email" => $email,
			"password" => $password
		];

		$post_field = json_encode($post_field);
		$curl = curl_init();
		$url = "{$_ENV['API_URL']}/users/login";

		curl_setopt_array($curl, [
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => $post_field,
			CURLOPT_HTTPHEADER => [
					'Content-Type: application/json'
			],
		]);

		$response = curl_exec($curl);

		curl_close($curl);

		$curl = curl_init();
		$result = json_decode($response, true);

		if ($result['success']) {
			$data_response = [
				'message' => $result['message'],
				'status' => $result['success']
			];

			$session = [
				'id' => $result['data']['id'],
				'name' => $result['data']['name'],
				'email' => $result['data']['email'],
				'token' => $result['data']['token'],
				'role' => @$result['data']['role'] == "" ? "user" : @$result['data']['role']
			];

			$this->session->set_userdata($session);

			echo json_encode($data_response);
		} else {
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
		$last_name = $data['lastname'];
		$email = $data['email'];
		$password = $data['password'];

		$post_field = [
			"name" 	=> "{$first_name} {$last_name}",
			"email" => $email,
			"password" => $password
		];

		$post_field = json_encode($post_field);
		$curl = curl_init();
		$url = "{$_ENV['API_URL']}/users/register";

		curl_setopt_array($curl, [
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => $post_field,
			CURLOPT_HTTPHEADER => [
				'Content-Type: application/json'
			],
		]);

		$response = curl_exec($curl);

		curl_close($curl);

		$curl = curl_init();
		$result = json_decode($response, true);

		if ($result['success']) {
			$data_response = [
				'message' => $result['message'],
				'status' => $result['success']
			];

			$session = [
				'id' => $result['data']['id'],
				'name' => $result['data']['name'],
				'email' => $result['data']['email'],
				'token' => $result['data']['token'],
				'role' => @$result['data']['role'] == "" ? "user" : @$result['data']['role']
			];

			$this->session->set_userdata($session);

			echo json_encode($data_response);
		} else {
			$data_response = [
				'message' => $result['message'],
				'status' => $result['success'],
				'error' => $result['error']
			];
			echo json_encode($data_response);
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}
}
