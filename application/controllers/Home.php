<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Frontend_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("product_model");
		$this->load->model("category_model");
		$this->load->model("post_model");
		$this->load->model("image_model");
	}

	public function index()
	{
		// Get commom data
		$data = $this->data;

		// Get banner
		unset($params);
		$params['type'] = 'banner1';
		$params['is_enable'] = 1;
		$banners = $this->image_model->select($params);
		$data['banner']['banner1'] = $banners[0];

		// Get banner
		unset($params);
		$params['type'] = 'banner2';
		$params['is_enable'] = 1;
		$banners = $this->image_model->select($params);
		$data['banner']['banner2'] = $banners[0];

		// Get banner
		unset($params);
		$params['type'] = 'banner3';
		$params['is_enable'] = 1;
		$banners = $this->image_model->select($params);
		$data['banner']['banner3'] = $banners[0];

		// Get banner
		unset($params);
		$params['type'] = 'banner4';
		$params['is_enable'] = 1;
		$banners = $this->image_model->select($params);
		$data['banner']['banner4'] = $banners[0];

		// Set banner
		$data['is_show_slide'] = true;
		// Get slides
		$params['type'] = 'slide';
		$params['is_enable'] = 1;
		$data['slides'] = $this->image_model->select($params);

		// Get Quotation
		unset($params);
		$params['type'] = 'quotation';
		$params['is_enable'] = 1;
		$params['is_on_home'] = 1;
		$data['quotations'] = $this->post_model->select($params, 'display_order ASC', 9);

		unset($params);
		$params['type'] = 'quotation2';
		$params['is_enable'] = 1;
		$params['is_on_home'] = 1;
		$data['quotations2'] = $this->post_model->select($params, 'display_order ASC', 9);

		unset($params);
		$params['type'] = 'quotation3';
		$params['is_enable'] = 1;
		$params['is_on_home'] = 1;
		$data['quotations3'] = $this->post_model->select($params, 'display_order ASC', 9);

		// Get product on home page
		unset($params);
		$params['product.type'] = TYPE_PRODUCT;
		$params['product.is_enable'] = 1;
		$params['product.is_on_home'] = 1;
		$data['products_on_home'] = $this->product_model->select($params);

		// Config subview
		$data['title'] = $data['company']['meta_keyword'];
		$data['meta_keyword'] = $data['company']['meta_keyword'];
		$data['meta_description'] = $data['company']['meta_description'];

		$data['meta_og']['type'] = 'company';
		$data['meta_og']['title'] = $data['title'];
		$data['meta_og']['description'] = $data['meta_description'];
		$data['meta_og']['image'] = base_url() . 'assets/frontend/img/logo-4.png';

		$data['subview'] = 'home';

		$this->load->view('main', $data);
	}

	public function quick_search()
	{
		$post_data = $this->input->post();
		$products = [];

		if ($post_data) {
			$params['product.type'] = 'product';
			$params['product.is_enable'] = 1;
			$products = $this->product_model->search($post_data['keyword'], $params, 5);
		}
		echo json_encode($products);
	}
}
