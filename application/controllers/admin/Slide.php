<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slide extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('image_lib');
		$this->load->model("admin/image_model");
	}

	public function index()
	{
		$params['type'] = 'slide';
		$slides = $this->image_model->get($params);
		$data['slides'] = $slides;
		$data['subview'] = '/admin/slide';
		$this->load->view('admin/layout/main', $data);
	}

	public function insert()
	{
		// Check form submit or not
		if (isset($_FILES['files'])) {

			if (!file_exists(SLIDE_UPLOAD_PATH)) {
				mkdir(SLIDE_UPLOAD_PATH, 777, true);
			}

			// Set preference
			$config['upload_path'] = SLIDE_UPLOAD_PATH;
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['overwrite'] = false;
			$config['encrypt_name'] = true;

			//Load upload library
			$this->load->library('upload', $config);

			// Looping all files
			for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
				// Define new $_FILES array - $_FILES['file']
				$_FILES['file']['name'] = $_FILES['files']['name'][$i];
				$_FILES['file']['type'] = $_FILES['files']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
				$_FILES['file']['error'] = $_FILES['files']['error'][$i];
				$_FILES['file']['size'] = $_FILES['files']['size'][$i];

				// Upload files
				if ($this->upload->do_upload('file')) {
					// Get data about the file
					$fileInfo = $this->upload->data();

					// Initialize array
					$params['name'] = $fileInfo['file_name'];
					$params['path'] = SLIDE_UPLOAD_PATH . $fileInfo['file_name'];
					$params['thumb'] = $this->create_thumb($fileInfo, SLIDE_IMAGE_WIDTH, SLIDE_IMAGE_HEIGHT);
					$params['display_order'] = $i;
					$params['type'] = 'slide';
					$this->image_model->insert($params);
				}
			}
		}
	}

	public function delete()
	{
		$post_data = json_decode(file_get_contents('php://input'), true);

		if ($post_data) {
			$ids = $post_data['ids'];

			// Delete Images
			foreach ($ids as  $id) {
				$params['id'] = $id;
				$params['type'] = 'slide';
				$image = $this->image_model->get($params);
				$this->image_model->delete($params);
				unlink(SLIDE_UPLOAD_PATH . $image[0]['name']);
				unlink(SLIDE_UPLOAD_PATH . $image[0]['thumb']);
			}

			echo json_encode(array(
				"success" => true
			));
		}
	}

	public function update_display_order()
	{
		$post_data = json_decode(file_get_contents('php://input'), true);
		if ($post_data) {
			$params['id'] = $post_data['id'];
			$params['display_order'] = $post_data['display_order'];
			$result = $this->image_model->update($params);
			echo json_encode(array(
				"success" => $result
			));
		}
	}

	public function update_status()
	{
		$post_data = json_decode(file_get_contents('php://input'), true);
		if ($post_data) {
			$params['id'] = $post_data['id'];
			$params['is_enable'] = $post_data['is_enable'];
			$result = $this->image_model->update($params);
			echo json_encode(array(
				"success" => $result
			));
		}
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
			unlink(SLIDE_UPLOAD_PATH . $cropped_name);
		}
		$this->image_lib->clear();
		return $thumb_name;
	}
}
