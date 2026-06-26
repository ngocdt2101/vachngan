<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends Frontend_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("news_model");
		$this->load->model("postCategory_model");
		$this->load->model("image_model");
	}

	public function index($name_unsigned = null)
	{
		// Get commom data
		$data = $this->data;

		// Get News banner
		unset($params);
		$params['type'] = 'banner8';
		$params['is_enable'] = 1;
		$banners = $this->image_model->select($params);
		$data['banner']['banner8'] = $banners[0];

		// Get news
		$params['type'] = TYPE_NEWS;
		$params['is_enable'] = 1;
		$data['news'] = $this->news_model->Get($params);

		// Meta
		unset($params);
		$params['type'] = TYPE_POST;
		$params['is_enable'] = 1;
		$params['name_unsigned'] = "bao-gia";
		$result= $this->postCategory_model->Get($params);
		$category = $result[0];

		$data['title'] = "Tin Tức";
		$data['meta_keyword'] = $category['meta_keyword'];
		$data['meta_description'] = $category['meta_description'];

		// Config subview
		$data['subview'] = 'news';
		$this->load->view('main', $data);
	}

	public function detail($name_unsigned = null)
	{
		// Get commom data
		$data = $this->data;

		// Get news
		$params['type'] = TYPE_NEWS;
		$params['is_enable'] = 1;
		$params['name_unsigned'] = urlencode($name_unsigned);
		$result = $this->news_model->Get($params);

		if (!$result) {
			show_404();
		} else {
			$news = $result[0];
			$data['news'] = $news;
			$data['tags'] = array_filter(explode(',', $news['tags']));

			// Get News banner
			unset($params);
			$params['type'] = 'banner8';
			$params['is_enable'] = 1;
			$banners = $this->image_model->select($params);
			$data['banner']['banner8'] = $banners[0];

			// Get Related news
			unset($params);
			$params['type'] = TYPE_NEWS;
			$params['is_enable'] = 1;
			$data['related_news'] = $this->news_model->GetRelatedNews($news['id'], $params, 'updated_at DESC', 6);

			// Update view count
			unset($params);
			$params['id'] = $news['id'];
			$params['view_count'] = $news['view_count'] + 1;
			$this->news_model->Update($params);

			// Config subview
			$data['title'] = $news['name'];
			$data['meta_keywords'] = $news['meta_keyword'];
			$data['meta_description'] = $news['meta_description'];

			$data['meta_og']['type'] = 'article';
			$data['meta_og']['title'] = $data['title'];
			$data['meta_og']['description'] = $data['meta_description'];
			$data['meta_og']['image'] = base_url() . POST_UPLOAD_PATH . $news['avatar'];

			$data['subview'] = 'news-detail';
			$this->load->view('main', $data);
		}
	}
}
