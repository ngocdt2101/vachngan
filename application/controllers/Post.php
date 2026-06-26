<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends Frontend_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("post_model");
		$this->load->model("image_model");
	}

	public function get_by_category($name_unsigned = null)
	{
		// Get commom data
		$data = $this->data;

		// Get Banner 2
		unset($params);
		$params['type'] = 'banner4';
		$params['is_enable'] = 1;
		$banners = $this->image_model->select($params);
		$data['banner']['banner4'] = $banners[0];

		// Define category by name_unsigned
		$data['post_category'] = $this->get_category_by_name_unsigned($data['post_categories'], $name_unsigned);

		// Get posts of category
		if (!$data['post_category']) {
			show_404();
		} else {
			// Get posts
			$data['posts'] = $this->get_post_by_category($data['post_category']);

			// Config subview
			$data['title'] = $data['post_category']['name'];
			$data['meta_keyword'] = $data['post_category']['meta_keyword'];
			$data['meta_description'] = $data['post_category']['meta_description'];

			$data['meta_og']['type'] = 'article';
			$data['meta_og']['title'] = $data['title'];
			$data['meta_og']['description'] = $data['meta_description'];
			$data['meta_og']['image'] = base_url() . POST_UPLOAD_PATH . $data['post_category']['avatar'];

			if($data['post_category']['name_unsigned'] == 'du-an')
				$data['subview'] = 'project-category';
			else if ($data['post_category']['name_unsigned'] == 'bao-gia')
				$data['subview'] = 'quotation-category';
			else
				$data['subview'] = 'post-category';

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

	public function get_post_by_category($category)
	{
		$result = [];
		$params['post.type'] = TYPE_POST;
		$params['post.is_enable'] = 1;
		$params['post.category_id'] = $category['id'];
		$result = $this->post_model->select($params);

		foreach ($category['sub_categories'] as $subcategory) {
			$products = $this->get_post_by_category($subcategory);
			if ($products && count($products) > 0) {
				$result = array_merge($result, $products);
			}
		}

		return $result;
	}

	public function detail($name_unsigned = null)
	{
		// Get commom data
		$data = $this->data;

		// Get product
		unset($params);
		$params['post.type'] = TYPE_POST;
		$params['post.is_enable'] = 1;
		$params['post.name_unsigned'] = $name_unsigned;
		$post = $this->post_model->select($params);

		if (!$post) {
			show_404();
		} else {
			$data['post'] = $post[0];
			$data['tags'] = explode(',', $data['post']['meta_keyword']);

			// Get Related post
			unset($params);
			$params['post.type'] = TYPE_POST;
			$params['post.is_enable'] = 1;
			$params['post.category_id'] = $data['post']['category_id'];
			$data['related_posts'] = $this->post_model->select($params, null, 6);

			// Get Banner 4
			unset($params);
			$params['type'] = 'banner4';
			$params['is_enable'] = 1;
			$banners = $this->image_model->select($params);
			$data['banner']['banner4'] = $banners[0];

			// Get Banner 7
			unset($params);
			$params['type'] = 'banner7';
			$params['is_enable'] = 1;
			$banners = $this->image_model->select($params);
			$data['banner']['banner7'] = $banners[0];

			// Config subview
			$data['title'] = $post[0]['name'];
			$data['meta_keyword'] = $post[0]['meta_keyword'];
			$data['meta_description'] = $post[0]['meta_description'];

			$data['meta_og']['type'] = 'article';
			$data['meta_og']['title'] = $data['title'];
			$data['meta_og']['description'] = $data['meta_description'];
			$data['meta_og']['image'] = base_url() . POST_UPLOAD_PATH . $post[0]['avatar'];

			$data['subview'] = 'post-detail';
			$this->load->view('main', $data);
		}
	}
}
