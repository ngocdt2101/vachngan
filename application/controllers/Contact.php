<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends Frontend_Controller
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

		// Get Banner 2
		unset($params);
		$params['type'] = 'banner5';
		$params['is_enable'] = 1;
		$banners = $this->image_model->select($params);
		$data['banner']['banner5'] = $banners[0];

		// Config subview
		$data['title'] = 'Liên Hệ';
		$data['subview'] = 'contact';

		$this->load->view('main', $data);
	}
}
