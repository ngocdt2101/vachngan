<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quotation3 extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('image_lib');
		$this->load->model("admin/post_model");
		$this->load->model("admin/image_model");
	}

	public function index()
	{
		$params['type'] = 'quotation3';
		$result = $this->post_model->select($params);
		$data['subview'] = '/admin/quotation3/index';
		$data['quotations3'] = $result;
		$this->load->view('admin/layout/main', $data);
	}

	public function add()
	{
		$data['subview'] = '/admin/quotation3/add';
		$this->load->view('admin/layout/main', $data);
	}

	public function insert()
	{
		$post_data = $this->input->post();

		if ($post_data) {
			$post['name'] = $post_data['name'];
			$post['name_unsigned'] = $post_data['name_unsigned'];
			$post['description'] = $post_data['description'];
			$post['content'] = $post_data['content'];
			$post['type'] = 'quotation3';
			$post['is_enable'] = $post_data['is_enable'];
			$post['is_on_home'] = (int)$post_data['is_on_home'];
			$post['is_on_menu'] = $post_data['is_on_menu'];
			$post['is_hot'] = $post_data['is_hot'];
			$post['display_order'] = $post_data['display_order'];
			$post['meta_keyword'] = $post_data['meta_keyword'];
			$post['meta_description'] = $post_data['meta_description'];
			$post['view_count'] =  DEFAULT_VIEW_COUNT;
			if (array_key_exists('avatar', $_FILES)) {
				$avatar = $this->upload_avatar();
				$post['avatar'] = $avatar['thumb'];
			}

			// Insert Record
			$id = $this->post_model->insert($post);

			// Set response to Client
			echo json_encode(array(
				'success' => true
			));
		}
	}

	public function edit($id = null)
	{
		$params['id'] = $id;
		$result = $this->post_model->select($params);

		if ($result) {
			$data['post'] = $result[0];
			$data['subview'] = '/admin/quotation3/edit';
			$this->load->view('admin/layout/main', $data);
		} else {
			show_404();
		}
	}

	public function update()
	{
		$post_data = $this->input->post();

		if ($post_data) {
			$post['id'] = $post_data['id'];
			$post['name'] = $post_data['name'];
			$post['name_unsigned'] = $post_data['name_unsigned'];
			$post['description'] = $post_data['description'];
			$post['content'] = $post_data['content'];
			$post['type'] = 'quotation3';
			$post['is_enable'] = $post_data['is_enable'];
			$post['is_on_home'] = (int)$post_data['is_on_home'];
			$post['is_hot'] = $post_data['is_hot'];
			$post['display_order'] = $post_data['display_order'];
			$post['meta_keyword'] = $post_data['meta_keyword'];
			$post['meta_description'] = $post_data['meta_description'];
			if (array_key_exists('avatar', $_FILES)) {
				$avatar = $this->upload_avatar();
				$post['avatar'] = $avatar['thumb'];
			}

			// Update Record
			$this->post_model->update($post);

			// Set response to Client
			echo json_encode(array(
				'success' => true
			));
		}
	}

	public function delete()
	{
		$post_data = json_decode(file_get_contents('php://input'), true);

		if ($post_data) {
			$ids = $post_data['ids'];

			// Delete category
			$this->post_model->delete($ids);

			// Delete Avatar

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
			$result = $this->post_model->update($params);
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
			$result = $this->post_model->update($params);
			echo json_encode(array(
				"success" => $result
			));
		}
	}

	public function update_show_on_home()
	{
		$post_data = json_decode(file_get_contents('php://input'), true);

		if ($post_data) {
			$params['id'] = $post_data['id'];
			$params['is_on_home'] = $post_data['is_on_home'];
			$result = $this->post_model->update($params);
			echo json_encode(array(
				"success" => $result
			));
		}
	}

	public function upload_avatar()
	{
		if (!file_exists(POST_UPLOAD_PATH)) {
			mkdir(POST_UPLOAD_PATH, 777, true);
		}
		$config['upload_path'] = POST_UPLOAD_PATH;
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['overwrite'] = false;
		$config['max_size'] = 10240;

		// Load and initialize upload library 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('avatar')) {
			$fileInfo = $this->upload->data();
			$name = $fileInfo['file_name'];
			$thumb = $this->create_thumb($fileInfo, POST_IMAGE_WIDTH, POST_IMAGE_HEIGHT);
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
			unlink(POST_UPLOAD_PATH . $cropped_name);
		}
		$this->image_lib->clear();
		return $thumb_name;
	}
}
