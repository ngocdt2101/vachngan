<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin/category_model");
		$this->load->model("admin/image_model");
		$this->load->helper('util');
	}

	public function index()
	{
		// $params['level']     = 0;
		$params['type']      = TYPE_PRODUCT;
		$params['is_delete'] = 0;
		$data['categories']  = $this->category_model->select($params);
		$data['subview']     = '/admin/category/index';
		$this->load->view('admin/layout/main', $data);
	}

	public function add()
	{
		$data['subview'] = '/admin/category/add';
		$this->load->view('admin/layout/main', $data);
	}

	public function edit($id)
	{
		$params['id']        = $id;
		// $params['level']     = 0;
		$params['type']      = TYPE_PRODUCT;
		$params['is_delete'] = 0;
		$result = $this->category_model->select($params);
		if ($result) {
			$data['category'] = $result[0];
			$data['subview']  = '/admin/category/edit';
			$this->load->view('admin/layout/main', $data);
		} else {
			show_404();
		}
	}

	public function insert()
	{
		$post_data = $this->input->post();
		if ($post_data) {
			// Get params
			$category['name']             = trim($post_data['name']);
			$category['name_unsigned']    = create_slug($category['name']);
			$category['level']            = $post_data['level'];
			$category['parent_id']        = $post_data['parent_id'];
			$category['description']      = $post_data['description'];
			$category['content']          = $post_data['content'];
			$category['type']             = TYPE_PRODUCT;
			$category['display_order']    = $post_data['display_order'];
			$category['is_enable']        = $post_data['is_enable'];
			$category['is_hot']           = $post_data['is_hot'];
			$category['meta_keyword']     = trim($post_data['meta_keyword']);
			$category['meta_description'] = trim($post_data['meta_description']);

			// Upload Avatar
			if (array_key_exists('avatar', $_FILES)) {
				$avatar            = upload_image('avatar', IMAGE_UPLOAD_PATH, PRODUCT_CATEGORY_IMAGE_WIDTH, PRODUCT_CATEGORY_IMAGE_HEIGHT);
				$category['avatar'] = $avatar['thumb'];
			}

			// Insert Record
			$id = $this->category_model->insert($category);

			// Set response to Client
			echo json_encode(array(
				'success' => true
			));
		}
	}

	public function update()
	{
		$post_data = $this->input->post();
		if ($post_data) {
			// Get params
			$category['id']               = $post_data['id'];
			$category['name']             = trim($post_data['name']);
			$category['name_unsigned']    = create_slug($category['name']);
			$category['level']            = $post_data['level'];
			$category['parent_id']        = $post_data['parent_id'];
			$category['description']      = $post_data['description'];
			$category['content']          = $post_data['content'];
			$category['type']             = TYPE_PRODUCT;
			$category['is_enable']        = $post_data['is_enable'];
			$category['is_hot']           = $post_data['is_hot'];
			$category['display_order']    = $post_data['display_order'];
			$category['meta_keyword']     = trim($post_data['meta_keyword']);
			$category['meta_description'] = trim($post_data['meta_description']);

			// Upload Avatar
			if (array_key_exists('avatar', $_FILES)) {
				$avatar            = upload_image('avatar', IMAGE_UPLOAD_PATH, PRODUCT_CATEGORY_IMAGE_WIDTH, PRODUCT_CATEGORY_IMAGE_HEIGHT);
				$category['avatar'] = $avatar['thumb'];
			}

			// Update Record
			$result = $this->category_model->update($category);

			// Set response to Client
			echo json_encode(array(
				'success' => $result
			));
		}
	}

	public function delete_category()
	{
		$post_data = json_decode(file_get_contents('php://input'), true);

		if ($post_data) {
			$ids = $post_data['ids'];

			// Delete category
			$this->category_model->delete($ids);

			//Delete Avatar
			// ....

			// Delete Images
			foreach ($ids as  $id) {
				$params['parent_id'] = $id;
				$params['type'] = 'category';
				$images = $this->image_model->get($params);
				foreach ($images as $image) {
					$this->image_model->delete($params);
					unlink(IMAGE_UPLOAD_PATH . $image['name']);
					unlink(IMAGE_UPLOAD_PATH . $image['thumb']);
				}
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
			$result = $this->category_model->update($params);
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
			$result = $this->category_model->update($params);
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
			$result = $this->category_model->update($params);
			echo json_encode(array(
				"success" => $result
			));
		}
	}

	public function update_is_hot()
	{
		$post_data = json_decode(file_get_contents('php://input'), true);
		if ($post_data) {
			$params['id'] = $post_data['id'];
			$params['is_hot'] = $post_data['is_hot'];
			$result = $this->category_model->update($params);
			echo json_encode(array(
				"success" => $result
			));
		}
	}

	public function upload_images()
	{
		// If files are selected to upload 
		if (!empty($_FILES['image']['name'])) {
			if (!file_exists(IMAGE_UPLOAD_PATH)) {
				mkdir(IMAGE_UPLOAD_PATH, 777, true);
			}

			// File upload configuration 
			$config['upload_path'] = IMAGE_UPLOAD_PATH;
			$config['overwrite'] = false;
			$config['allowed_types'] = 'jpg|jpeg|png|gif';

			// Load and initialize upload library 
			$this->load->library('upload');
			$this->upload->initialize($config);

			// Upload file to server 
			if ($this->upload->do_upload('image')) {
				$fileInfo = $this->upload->data();
				$record['name'] = $fileInfo['file_name'];
				$record['path'] = IMAGE_UPLOAD_PATH . $fileInfo['file_name'];
				$record['thumb'] = create_thumb($fileInfo, 320, 320);
			}

			// Insert record into the database 
			if (!empty($record)) {
				$id = $this->image_model->insert($record);
				echo json_encode(array(
					"id" => $id,
					"success" => true
				));
			}
		}
	}
}
