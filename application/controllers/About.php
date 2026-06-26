<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends Frontend_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("company_model");
		$this->load->model("about_model");
		$this->load->model("category_model");
	}

	public function index()
	{
		// Get commom data
		$data = $this->data;

		// Get Banner 4
		unset($params);
		$params['type'] = 'banner4';
		$params['is_enable'] = 1;
		$banners = $this->image_model->select($params);
		$data['banner']['banner4'] = $banners[0];

		// Get about us
		$data['about'] = $this->about_model->select();

		// Config subview
		$data['title'] = 'Giới Thiệu';
		$data['subview'] = 'about';

		$this->load->view('main', $data);
	}
}
