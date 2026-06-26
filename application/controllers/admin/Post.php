<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin/post_model");
		$this->load->model("admin/postCategory_model");
		$this->load->helper('util');
	}

	public function index()
	{
		$params['is_delete'] = 0;
		$data['posts'] = $this->post_model->select($params);
		$data['subview'] = '/admin/post/index';
		$this->load->view('admin/layout/main', $data);
	}

	public function quotation()
	{
		$params['type'] = TYPE_QUOTATION;
		$params['is_delete'] = 0;
		$data['posts'] = $this->post_model->select($params);
		$data['subview'] = '/admin/post/index';
		$data['type'] = TYPE_QUOTATION;
		$this->load->view('admin/layout/main', $data);
	}

	public function news()
	{
		$params['type'] = TYPE_NEWS;
		$params['is_delete'] = 0;
		$data['posts'] = $this->post_model->select($params);
		$data['subview'] = '/admin/post/index';
		$data['type'] = TYPE_NEWS;
		$this->load->view('admin/layout/main', $data);
	}

	public function add()
	{
		// Get Categories
		$params['is_delete'] = 0;
		$data['categories'] = $this->postCategory_model->select($params, 'name ASC');
		$data['subview'] = '/admin/post/add';
		$this->load->view('admin/layout/main', $data);
	}

	public function insert()
	{
		$post_data = $this->input->post();

		if ($post_data) {
			$post['name']             = trim($post_data['name']);
			$post['name_unsigned']    = create_slug($post['name']);
			$post['category_id']      = $post_data['category_id'];
			$post['description']      = $post_data['description'];
			$post['content']          = $post_data['content'];
			$post['type']             = $post_data['type'];
			$post['is_delete']        = 0;
			$post['is_enable']        = $post_data['is_enable'];
			$post['is_on_home']       = $post_data['is_on_home'];
			$post['is_hot']           = $post_data['is_hot'];
			$post['display_order']    = $post_data['display_order'];
			$post['meta_keyword']     = trim($post_data['meta_keyword']);
			$post['meta_description'] = trim($post_data['meta_description']);
			$post['tags']             = trim($post_data['tags']);
			$post['view_count']       =  DEFAULT_VIEW_COUNT;
			if (array_key_exists('avatar', $_FILES)) {
				$avatar         = upload_image('avatar', POST_UPLOAD_PATH, POST_IMAGE_WIDTH, POST_IMAGE_HEIGHT);
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

	public function edit($id)
	{
		$params['id'] = $id;
		$result = $this->post_model->select($params);

		if ($result) {
			unset($params);
			$params['is_delete'] = 0;
			$sort = 'name ASC';
			$data['categories'] = $this->postCategory_model->select($params, $sort);

			$data['post'] = $result[0];
			$data['subview'] = '/admin/post/edit';
			$this->load->view('admin/layout/main', $data);
		} else {
			show_404();
		}
	}

	public function update()
	{
		$post_data = $this->input->post();

		if ($post_data) {
			$post['id']               = $post_data['id'];
			$post['name']             = trim($post_data['name']);
			$post['name_unsigned']    = create_slug($post['name']);
			$post['category_id']      = $post_data['category_id'];
			$post['description']      = $post_data['description'];
			$post['content']          = $post_data['content'];
			$post['type']             = $post_data['type'];
			$post['is_delete']        = 0;
			$post['is_enable']        = $post_data['is_enable'];
			$post['is_on_home']       = $post_data['is_on_home'];
			$post['is_hot']           = $post_data['is_hot'];
			$post['display_order']    = $post_data['display_order'];
			$post['meta_keyword']     = trim($post_data['meta_keyword']);
			$post['meta_description'] = trim($post_data['meta_description']);
			$post['tags']             = trim($post_data['tags']);

			if (array_key_exists('avatar', $_FILES)) {
				$this->delete_post_image($post['id']);
				$avatar         = upload_image('avatar', POST_UPLOAD_PATH, POST_IMAGE_WIDTH, POST_IMAGE_HEIGHT);
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

			// Delete images
			foreach ($ids as $index => $id) {
				$this->delete_post_image($id);
			}

			// Delete category
			$this->post_model->delete($ids);

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

	public function delete_post_image($post_id)
	{
		$post = $this->post_model->select_by_post_id($post_id);

		if (isset($post)){
			unlink(POST_UPLOAD_PATH . $post['avatar']);
			unlink(POST_UPLOAD_PATH . str_replace('_thumb', '', $post['avatar']));
			unlink(POST_UPLOAD_PATH . $post['banner']);
			unlink(POST_UPLOAD_PATH . str_repeat('_thumb', '', $post['banner']));
			unlink(POST_UPLOAD_PATH . $post['banner2']);
			unlink(POST_UPLOAD_PATH . str_repeat('_thumb', '', $post['banner2']));
			unlink(POST_UPLOAD_PATH . $post['banner3']);
			unlink(POST_UPLOAD_PATH . str_repeat('_thumb', '', $post['banner3']));
		}
	}
}
