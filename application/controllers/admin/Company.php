<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('image_lib');
		$this->load->model("admin/company_model");
	}

	public function index()
	{
		$company = $this->company_model->select();
		$data['subview'] = '/admin/company';
		$data['company'] = $company;
		$this->load->view('admin/layout/main', $data);
	}

	public function update()
	{
		$post_data = $this->input->post();

		if ($post_data) {
			$params['id'] = $post_data['id'];
			$params['name'] = $post_data['name'];
			$params['sologan'] = $post_data['sologan'];

			// if (array_key_exists('logo', $_FILES)) {
			// 	$logo = $this->upload_image('logo', 200, 200);
			// 	$params['logo'] = $logo['thumb'];
			// }

			if (array_key_exists('banner', $_FILES)) {
				$banner = $this->upload_image('banner', 1400, 300);
				$params['banner'] = $banner['thumb'];
			}

			$params['favicon'] = $post_data['favicon'];
			$params['hotline'] = $post_data['hotline'];
			$params['phone_number'] = $post_data['phone_number'];
			$params['mobile_number'] = $post_data['mobile_number'];
			$params['tax_code'] = $post_data['tax_code'];
			$params['email'] = $post_data['email'];
			$params['address'] = $post_data['address'];
			$params['coordinate'] = $post_data['coordinate'];
			$params['description'] = $post_data['description'];
			$params['footer_setting'] = $post_data['footer_setting'];
			$params['content'] = $post_data['content'];
			$params['facebook'] = $post_data['facebook'];
			$params['zalo'] = $post_data['zalo'];
			$params['twitter'] = $post_data['twitter'];
			$params['youtube'] = $post_data['youtube'];
			$params['google_analytics'] = $post_data['google_analytics'];
			$params['zalo_chat'] = $post_data['zalo_chat'];
			$params['facebook_chat'] = $post_data['facebook_chat'];
			$params['chat'] = $post_data['chat'];
			$params['meta_keyword'] = $post_data['meta_keyword'];
			$params['meta_description'] = $post_data['meta_description'];

			// Update Record
			$this->company_model->update($params);

			// Set response to Client
			echo json_encode(array(
				'success' => true
			));
		}
	}

	public function upload_image($name, $width, $height)
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

		if ($this->upload->do_upload($name)) {
			$fileInfo = $this->upload->data();
			$file_name = $fileInfo['file_name'];
			$thumb_name = $this->create_thumb($fileInfo, $width, $height);
			return ['name' => $file_name, 'thumb' => $thumb_name];
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
