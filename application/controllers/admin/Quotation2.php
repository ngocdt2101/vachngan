<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quotation2 extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin/post_model");
		$this->load->model("admin/image_model");
		$this->load->helper('util');
	}

	public function index()
	{
		$params['type'] = 'quotation2';
		$result = $this->post_model->select($params);
		$data['subview'] = '/admin/quotation2/index';
		$data['quotations2'] = $result;
		$this->load->view('admin/layout/main', $data);
	}

	public function add()
	{
		$data['subview'] = '/admin/quotation2/add';
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
			$post['type'] = 'quotation2';
			$post['is_enable'] = $post_data['is_enable'];
			$post['is_on_home'] = (int)$post_data['is_on_home'];
			$post['is_on_menu'] = $post_data['is_on_menu'];
			$post['is_hot'] = $post_data['is_hot'];
			$post['display_order'] = $post_data['display_order'];
			$post['meta_keyword'] = $post_data['meta_keyword'];
			$post['meta_description'] = $post_data['meta_description'];
			$post['view_count'] = DEFAULT_VIEW_COUNT;
			if (array_key_exists('avatar', $_FILES)) {
				$avatar = upload_image('avatar', POST_UPLOAD_PATH, POST_IMAGE_WIDTH, POST_IMAGE_HEIGHT);
				$post['avatar'] = $avatar['thumb'];
			}

			$this->post_model->insert($post);

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
			$data['subview'] = '/admin/quotation2/edit';
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
			$post['type'] = 'quotation2';
			$post['is_enable'] = $post_data['is_enable'];
			$post['is_on_home'] = (int)$post_data['is_on_home'];
			$post['is_hot'] = $post_data['is_hot'];
			$post['display_order'] = $post_data['display_order'];
			$post['meta_keyword'] = $post_data['meta_keyword'];
			$post['meta_description'] = $post_data['meta_description'];
			if (array_key_exists('avatar', $_FILES)) {
				$avatar = upload_image('avatar', POST_UPLOAD_PATH, POST_IMAGE_WIDTH, POST_IMAGE_HEIGHT);
				$post['avatar'] = $avatar['thumb'];
			}

			$this->post_model->update($post);

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
}
