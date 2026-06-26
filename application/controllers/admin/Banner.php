<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banner extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('image_lib');
		$this->load->model("admin/image_model");
		$this->load->helper('util');
	}

	public function index()
	{
		$params['type'] = 'banner1';
		$banners = $this->image_model->get($params);
		$data['banner1'] = $banners ? $banners[0] : null;

		$params['type'] = 'banner2';
		$banners = $this->image_model->get($params);
		$data['banner2'] = $banners ? $banners[0] : null;

		$params['type'] = 'banner3';
		$banners = $this->image_model->get($params);
		$data['banner3'] = $banners ? $banners[0] : null;

		$params['type'] = 'banner4';
		$banners = $this->image_model->get($params);
		$data['banner4'] = $banners ? $banners[0] : null;

		$params['type'] = 'banner5';
		$banners = $this->image_model->get($params);
		$data['banner5'] = $banners ? $banners[0] : null;

		$params['type'] = 'banner6';
		$banners = $this->image_model->get($params);
		$data['banner6'] = $banners ? $banners[0] : null;

		$params['type'] = 'banner7';
		$banners = $this->image_model->get($params);
		$data['banner7'] = $banners ? $banners[0] : null;

		$params['type'] = 'banner8';
		$banners = $this->image_model->get($params);
		$data['banner8'] = $banners ? $banners[0] : null;

		$data['subview'] = '/admin/banner';
		$this->load->view('admin/layout/main', $data);
	}

	public function UploadBannerImage()
	{
		$post_data = $this->input->post();

		$params['type'] = $post_data['type'];
		$images = $this->image_model->get($params);
		$new_image = upload_image('image', BANNER_UPLOAD_PATH, $post_data['width'], $post_data['height']);

		if (isset($images[0])) {
			unlink(BANNER_UPLOAD_PATH . $images[0]['name']);
			unlink(BANNER_UPLOAD_PATH . $images[0]['thumb']);

			unset($params);
			$params['id']            = $images[0]['id'];
			$params['name']          = $new_image['name'];
			$params['path']          = $new_image['path'];
			$params['thumb']         = $new_image['thumb'];
			$params['display_order'] = 1;
			$params['type']          = $post_data['type'];
			$this->image_model->update($params);
		} else {
			unset($params);
			$params['name']          = $new_image['name'];
			$params['path']          = $new_image['path'];
			$params['thumb']         = $new_image['thumb'];
			$params['display_order'] = 1;
			$params['type']          = $post_data['type'];
			$this->image_model->insert($params);
		}

		// Set response to Client
		echo json_encode(array(
			'success' => true
		));
	}

	public function UpdateBannerInfo()
	{
		$post_data = $this->input->post();

		$params['type'] = $post_data['type'];
		$images = $this->image_model->get($params);

		if (isset($images[0])) {
			unset($params);
			$params['id']            = $images[0]['id'];
			$params['type']          = $post_data['type'];
			$params['link']          = $post_data['link'];
			$params['title']         = $post_data['title'];
			$params['display_order'] = 1;
			$params['description']   = $post_data['description'];
			$params['is_enable']     = $post_data['is_enable'];
			$this->image_model->update($params);
		} else {
			unset($params);
			$params['type']          = $post_data['type'];
			$params['link']          = $post_data['link'];
			$params['title']         = $post_data['title'];
			$params['display_order'] = 1;
			$params['description']   = $post_data['description'];
			$params['is_enable']     = $post_data['is_enable'];
			$this->image_model->insert($params);
		}

		// Set response to Client
		echo json_encode(array(
			'success' => true
		));
	}
}
