<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PostCategory extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin/postCategory_model");
		$this->load->model("admin/image_model");
		$this->load->helper('util');
	}

	public function index()
	{
		$params['level'] = 0;
		$data['post_categories'] = $this->postCategory_model->select($params);
		$data['subview'] = '/admin/post_category/index';
		$this->load->view('admin/layout/main', $data);
	}

	public function add()
	{
		$data['subview'] = '/admin/post_category/add';
		$this->load->view('admin/layout/main', $data);
	}

	public function edit($id)
	{
		$params['id'] = $id;
		$result = $this->postCategory_model->select($params);
		if ($result) {
			$data['category'] = $result[0];
			$data['subview'] = '/admin/post_category/edit';
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
			$category['type']             = TYPE_POST;
			$category['display_order']    = $post_data['display_order'];
			$category['is_enable']        = $post_data['is_enable'];
			$category['is_on_home']       = $post_data['is_on_home'];
			$category['is_hot']           = $post_data['is_hot'];
			$category['meta_keyword']     = trim($post_data['meta_keyword']);
			$category['meta_description'] = trim($post_data['meta_description']);
			$avatar                       = upload_image('avatar', POST_UPLOAD_PATH, POST_CATEGORY_IMAGE_WIDTH, POST_CATEGORY_IMAGE_HEIGHT);
			$category['avatar']           = $avatar['name'];
			$category['thumb']            = $avatar['thumb'];

			// Insert Record
			$id = $this->postCategory_model->insert($category);

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
			$category['type']             = TYPE_POST;
			$category['is_enable']        = $post_data['is_enable'];
			$category['is_on_home']       = $post_data['is_on_home'];
			$category['is_hot']           = $post_data['is_hot'];
			$category['display_order']    = $post_data['display_order'];
			$category['meta_keyword']     = trim($post_data['meta_keyword']);
			$category['meta_description'] = trim($post_data['meta_description']);
			if (array_key_exists('avatar', $_FILES)) {
				$avatar                  = upload_image('avatar', POST_UPLOAD_PATH, POST_CATEGORY_IMAGE_WIDTH, POST_CATEGORY_IMAGE_HEIGHT);
				$category['avatar']       = $avatar['name'];
				$category['thumb']        = $avatar['thumb'];
			}

			// Update Record
			$result = $this->postCategory_model->update($category);

			// Set response to Client
			echo json_encode(array(
				'success' => $result
			));
		}
	}

	public function delete()
	{
		$post_data = json_decode(file_get_contents('php://input'), true);

		if ($post_data) {
			$ids = $post_data['ids'];

			foreach ($ids as $id) {
				// Delete Avatar
				$params['id'] = $id;
				$category = $this->postCategory_model->select($params);
				if (isset($category[0])) {
					unlink(IMAGE_UPLOAD_PATH . $category[0]['avatar']);
					unlink(IMAGE_UPLOAD_PATH . $category[0]['thumb']);
				}
			}

			// Delete category
			$this->postCategory_model->delete($ids);

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
			$result = $this->postCategory_model->update($params);
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
			$result = $this->postCategory_model->update($params);
			echo json_encode(array(
				"success" => $result
			));
		}
	}

	public function update_is_on_home()
	{
		$post_data = json_decode(file_get_contents('php://input'), true);
		if ($post_data) {
			$params['id'] = $post_data['id'];
			$params['is_on_home'] = $post_data['is_on_home'];
			$result = $this->postCategory_model->update($params);
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
			$result = $this->postCategory_model->update($params);
			echo json_encode(array(
				"success" => $result
			));
		}
	}
}
