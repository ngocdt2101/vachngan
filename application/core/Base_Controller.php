<?php
class Admin_Controller extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->authorization();
	}

	public function authorization()
	{
		if (!isset($this->session->userdata['username'])) {
			redirect(base_url() . 'admin/login');
		}
	}
}

class Frontend_Controller extends CI_Controller
{
	public $data = [];
	public function __construct()
	{
		parent::__construct();
		$this->load->model("company_model");
		$this->load->model("category_model");
		$this->load->model("post_model");
		$this->load->model("image_model");
		$this->load->model("product_model");
		$this->VisiterCouter();
		$this->BuildCommonData();
	}

	public function VisiterCouter()
	{
		if (!isset($this->session->userdata['visiter_couter'])) {
			$this->session->set_userdata('visiter_couter', 'true');

			$this->load->model("admin/counter_model");
			$params['ip_address'] = $_SERVER['REMOTE_ADDR'];
			$params['browser'] = $_SERVER['HTTP_USER_AGENT'];
			$params['created_at'] = date('Y-m-d h:i:s');
			$this->counter_model->insert($params);
		}
	}

	public function BuildCommonData()
	{
		// Get company information
		$this->data['company'] = $this->company_model->select();

		//Get product categories
		unset($params);
		$params['category.type'] = TYPE_PRODUCT;
		$params['category.is_enable'] = 1;
		$categories = $this->category_model->select($params);
		$this->data['all_categories'] = $categories;
		$this->data['categories'] = $this->BuildCategoryMenus($categories, 0);

		//Get post categories
		// unset($params);
		// $params['category.type'] = TYPE_POST;
		// $params['category.is_enable'] = 1;
		// $categories = $this->category_model->select($params);
		// $this->data['all_post_categories'] = $categories;
		// $this->data['post_categories'] = $this->BuildCategoryMenus($categories, 0);

		// Get product Hot
		unset($params);
		$params['product.type'] = TYPE_PRODUCT;
		$params['product.is_enable'] = 1;
		$this->data['products_hot'] = $this->product_model->select($params, 'display_order ASC', 5);

		// Get quotations hot
		unset($params);
		$params['type'] = TYPE_QUOTATION;
		$params['is_enable'] = 1;
		$params['is_on_home'] = 1;
		$this->data['quotations_on_home'] = $this->post_model->select($params, 'display_order ASC', 9);

		// Get News on Home Page
		unset($params);
		$params['type'] = TYPE_NEWS;
		$params['is_enable'] = 1;
		$params['is_on_home'] = 1;
		$this->data['news_on_home'] = $this->post_model->select($params, 'display_order ASC', 6);
	}

	function BuildCategoryMenus($all_categories, $parent_id = 0)
	{
		$categories = [];
		foreach ($all_categories as $key => $item) {
			if ($item['parent_id'] == $parent_id) {
				$category = $item;
				$category['sub_categories'] = $this->BuildCategoryMenus($all_categories, $item['id']);
				array_push($categories, $category);
			}
		}
		return $categories;
	}
}
