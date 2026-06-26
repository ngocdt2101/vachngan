<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin/post_model");
		$this->load->model("admin/category_model");
		$this->load->helper('util');
	}

	public function index()
	{
		$params['type'] = TYPE_ABOUT;
		$params['is_enable'] = 1;
		$result = $this->post_model->select($params);
		if (!$result) {
			$this->post_model->insert($params);
			$result = $this->post_model->select($params);
		}
		$data['subview'] = '/admin/about';
		$data['about'] = $result[0];
		$this->load->view('admin/layout/main', $data);
	}

	public function update_about()
	{
		$post_data = $this->input->post();
		if ($post_data) {
			$about['id']               = $post_data['id'];
			$about['name']             = trim($post_data['name']);
			$about['name_unsigned']    = create_slug($about['name_unsigned']);
			$about['description']      = $post_data['description'];
			$about['content']          = $post_data['content'];
			$about['type']             = TYPE_ABOUT;
			$about['is_enable']        = 1;
			$about['is_on_home']       = 1;
			$about['is_hot']           = 1;
			$about['meta_keyword']     = trim($post_data['meta_keyword']);
			$about['meta_description'] = trim($post_data['meta_description']);

			if (array_key_exists('banner', $_FILES)) {
				$banner                = upload_image('banner', POST_UPLOAD_PATH, ABOUT_IMAGE_WIDTH, ABOUT_IMAGE_HEIGHT);
				$about['banner']       = $banner['thumb'];
			}

			// Update Record
			$result = $this->post_model->update($about);

			// Set response to Client
			echo json_encode(array(
				'success' => $result
			));
		}
	}
}
