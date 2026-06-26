<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends Frontend_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("product_model");
		$this->load->model("image_model");
	}
	public function index()
	{
		// Get commom data
		$data = $this->data;

		// Get Banner 5
		unset($params);
		$params['type'] = 'banner5';
		$params['is_enable'] = 1;
		$banners = $this->image_model->select($params);
		$data['banner']['banner5'] = $banners[0];

		//Get product categories
		unset($params);
		$params['category.type'] = TYPE_PRODUCT;
		$params['category.is_enable'] = 1;
		$categories = $this->category_model->select($params);

		$data['products_by_category'] = [];
		foreach ($categories as $index => $item){
			$data['products_by_category'][$index]['category'] = $item;
			$data['products_by_category'][$index]['products'] = $this->get_products_by_category($item);
		}

		$data['subview'] = 'product';
		$this->load->view('main', $data);
	}

	public function get_by_category($name_unsigned = null)
	{
		// Get commom data
		$data = $this->data;

		// Get Banner 5
		unset($params);
		$params['type'] = 'banner5';
		$params['is_enable'] = 1;
		$banners = $this->image_model->select($params);
		$data['banner']['banner5'] = $banners[0];

		// Define category by name_unsigned
		$data['category'] = $this->get_category_by_name_unsigned($data['categories'], $name_unsigned);

		// Get products of category
		if (!$data['category']) {
			show_404();
		} else {
			// Get products
			$data['products'] = $this->get_products_by_category($data['category']);

			// Get Banner 6
			unset($params);
			$params['type'] = 'banner6';
			$params['is_enable'] = 1;
			$banners = $this->image_model->select($params);
			$data['banner']['banner6'] = $banners[0];

			// Config subview
			$data['title'] = $data['category']['name'];
			$data['meta_keyword'] = $data['category']['meta_keyword'];
			$data['meta_description'] = $data['category']['meta_description'];
			$data['subview'] = 'product-category';

			$this->load->view('main', $data);
		}
	}

	public function get_category_by_name_unsigned($categories, $name_unsigned = null)
	{
		$result = null;
		foreach ($categories as $category) {
			if ($category['name_unsigned'] == $name_unsigned) {
				$result = $category;
			}

			if (!$result) {
				$result = $this->get_category_by_name_unsigned($category['sub_categories'], $name_unsigned);
			}

			if ($result) {
				return $result;
			}
		}
	}

	public function get_products_by_category($category)
	{
		$result = [];
		$params['product.type'] = TYPE_PRODUCT;
		$params['product.is_enable'] = 1;
		$params['product.category_id'] = $category['id'];
		$result = $this->product_model->select($params);

		// foreach ($category['sub_categories'] as $subcategory) {
		// 	$products = $this->get_products_by_category($subcategory);
		// 	if ($products && count($products) > 0) {
		// 		$result = array_merge($result, $products);
		// 	}
		// }

		return $result;
	}

	public function detail($name_unsigned = null)
	{
		// Get commom data
		$data = $this->data;

		// Get Banner 5
		unset($params);
		$params['type'] = 'banner5';
		$params['is_enable'] = 1;
		$banners = $this->image_model->select($params);
		$data['banner']['banner5'] = $banners[0];

		// Get product
		unset($params);
		$params['product.type'] = TYPE_PRODUCT;
		$params['product.is_enable'] = 1;
		$params['product.name_unsigned'] = $name_unsigned;
		$products = $this->product_model->select($params);

		if (!$products) {
			show_404();
		} else {
			$data['product'] = $products[0];
			$data['tags'] = [];

			// Get product images
			unset($params);
			$params['type'] = TYPE_PRODUCT;
			$params['is_enable'] = 1;
			$params['parent_id'] = $data['product']['id'];
			$data['images'] = $this->image_model->select($params);

			// Get Related products
			unset($params);
			$params['product.type'] = TYPE_PRODUCT;
			$params['product.is_enable'] = 1;
			$params['product.category_id'] = $data['product']['category_id'];
			$data['related_products'] = $this->product_model->GetRelatedProducts($data['product']['id'], $params, null, 9);

			// Config subview
			$data['title'] = $products[0]['name'];
			$data['meta_keyword'] = $products[0]['meta_keyword'];
			$data['meta_description'] = $products[0]['meta_description'];
			$data['subview'] = 'product-detail';
			$this->load->view('main', $data);
		}
	}

	public function search()
	{
		$key_word = $this->input->get('tukhoa');
		$category_name_unsigned = $this->input->get('danhmuc');

		// Get commom data
		$data = $this->data;

		// Get products
		unset($params);
		if ($category_name_unsigned) {
			$params['category.name_unsigned'] = $category_name_unsigned;
		}

		if ($key_word) {
			$params['product.type'] = TYPE_PRODUCT;
			$params['product.is_enable'] = 1;

			$data['products'] = $this->product_model->search($key_word, $params);
			$data['title'] = 'Tìm kiếm';
			$data['subview'] = 'product-search';
			$this->load->view('main', $data);
		} else {
			show_404();
		}
	}
}
