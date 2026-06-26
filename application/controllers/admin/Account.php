<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('image_lib');
		$this->load->model("admin/user_model");
		$this->load->model("admin/image_model");
	}

	public function index()
	{
		// Get Current User 
		$params['username'] = $this->session->userdata['username'];
		$params['status'] = 1;
		$result = $this->user_model->get($params);
		if (!$result) {
			show_404();
		} else{
			$data['user'] = $result[0];

			if ($data['user']['permission'] == 1){
				// Get list user
				unset($params);
				$params['status'] = 1;
				$data['users'] = $this->user_model->get($params);
			} else{
				$data['users'] = [];
			}

			$data['subview'] = '/admin/account';

			$this->load->view('admin/layout/main', $data);
		}
	}

	public function update()
	{
		$post_data = $this->input->post();
		if ($post_data) {
			$user['id'] = $post_data['id'];
			$user['username'] = $post_data['username'];
			$user['full_name'] = $post_data['full_name'];
			$user['phone_number'] = $post_data['phone_number'];
			if (array_key_exists('avatar', $_FILES)) {
				$avatar = $this->upload_avatar();
				$user['avatar'] = $avatar['thumb'];
			}

			// Update Record
			$result = $this->user_model->update($user);

			if ($result && $this->session->userdata['username'] == $post_data['username']) {
				$this->session->set_userdata('full_name', $user['full_name']);
				if (array_key_exists('avatar', $_FILES)) {
					$this->session->set_userdata('avatar', $user['avatar']);
				}
			}

			// Set response to Client
			echo json_encode(array(
				'success' => $result
			));
		}
	}

	public function update_password()
	{
		$post_data = $this->input->post();
		if ($post_data) {
			if (strlen($post_data['new_password']) < 6) {
				echo json_encode(array(
					'success' => false,
					'message' => 'Mật khẩu ít nhất 6 ký tự!'
				));
				return false;
			}

			if ($post_data['new_password'] != $post_data['re_password']) {
				echo json_encode(array(
					'success' => false,
					'message' => 'Mật khẩu mới và xác nhận mật khẩu mới không khớp'
				));
				return false;
			}

			$params['id'] = $post_data['id'];
			$params['username'] = $post_data['username'];
			$params['password'] = md5($post_data['old_password']);
			$result = $this->user_model->get($params);

			if (!$result) {
				echo json_encode(array(
					'success' => false,
					'message' => 'Mật khẩu cũ không chính xác!'
				));
				return false;
			} else {
				$params['password'] = md5($post_data['new_password']);
				$result = $this->user_model->update($params);

				if ($result) {
					echo json_encode(array(
						'success' => true,
						'message' => 'Đổi mật khẩu thành công!'
					));
					return true;
				}

				echo json_encode(array(
					'success' => false,
					'message' => 'Đã có lỗi xảy ra. Vui lòng thử lại!'
				));
			}
		}
	}

	public function upload_avatar()
	{
		if (!file_exists(IMAGE_UPLOAD_PATH)) {
			mkdir(IMAGE_UPLOAD_PATH, 777, true);
		}
		$config['upload_path'] = IMAGE_UPLOAD_PATH;
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['overwrite'] = false;

		// Load and initialize upload library 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('avatar')) {
			$fileInfo = $this->upload->data();
			$name = $fileInfo['file_name'];
			$thumb = $this->create_thumb($fileInfo, 200, 200);
			return ['name' => $name, 'thumb' => $thumb];
		}
		return ['name' => NULL, 'thumb' => NULL];
	}

	public function create_thumb($fileInfo, $new_width, $new_height)
	{
		$extension = pathinfo($fileInfo['file_name'], PATHINFO_EXTENSION);
		$base_name = basename($fileInfo['file_name'], '.' . $extension);
		$cropped_name = $base_name . '_cropped.' . $extension;
		$thumb_name = $base_name . '_cropped_thumb.' . $extension;

		// Config to cropping
		$config = array(
			'image_library' => 'gd2',
			'source_image' => $fileInfo['full_path'],
			'new_image' => $fileInfo['file_path'],
			'maintain_ratio' => FALSE,
			'create_thumb' => TRUE,
			'thumb_marker' => '_cropped',
		);

		//Set cropping for y or x axis, depending on image orientation
		if ($fileInfo['image_width'] / $fileInfo['image_height'] > $new_width / $new_height) {
			$config['width'] = round($fileInfo['image_height'] * $new_width / $new_height);
			$config['height'] = $fileInfo['image_height'];
			$config['x_axis'] = round(($fileInfo['image_width'] - $config['width']) / 2);
		} else {
			$config['height'] = round($fileInfo['image_width'] * $new_height / $new_width);
			$config['width'] = $fileInfo['image_width'];
			$config['y_axis'] = round(($fileInfo['image_height'] - $config['height']) / 2);
		}

		$this->image_lib->initialize($config);

		if ($this->image_lib->crop()) {
			// Resize Image
			unset($config);
			$config = array(
				'image_library' => 'gd2',
				'source_image' => $fileInfo['file_path'] . $cropped_name,
				'new_image' => $fileInfo['file_path'],
				'create_thumb' => TRUE,
				'thumb_marker' => '_thumb',
				'width' => $new_width,
				'height' => $new_height
			);
			$this->image_lib->initialize($config);
			$this->image_lib->resize();
			unlink(IMAGE_UPLOAD_PATH . $cropped_name);
		}
		$this->image_lib->clear();
		return $thumb_name;
	}
}
