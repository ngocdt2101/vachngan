<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin/user_model");
	}

	public function index()
	{
		$this->load->view('admin/login');
	}

	public function login()
	{

		$post_data = $this->input->post();

		if ($post_data) {
			$params['username'] = $post_data['username'];
			$params['password'] = md5($post_data['password']);
			$result = $this->user_model->get($params);

			if (!$result) {
				echo json_encode(array(
					'login_status' => 'invalid',
				));
			} else {
				$user = $result[0];
				$this->session->set_userdata('id', $user['id']);
				$this->session->set_userdata('username', $user['username']);
				$this->session->set_userdata('full_name', $user['full_name']);
				$this->session->set_userdata('avatar', $user['avatar']);

				echo json_encode(array(
					'login_status' => 'success',
					'redirect_url' => base_url() . 'admin'
				));
			}
		}
	}

	public function logout()
	{
		// Removing session data
		unset($_SESSION['id']);
		unset($_SESSION['username']);
		$this->session->sess_destroy();
		redirect(base_url() . 'admin/login');
	}
}
