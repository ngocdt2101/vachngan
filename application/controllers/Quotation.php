<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quotation extends Frontend_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("company_model");
		$this->load->model("quotation_model");
		$this->load->model("post_model");
		$this->load->model("postCategory_model");
	}

	public function index()
	{
		// Get commom data
		$data = $this->data;

		// Get Quotations banner
		unset($params);
		$params['type'] = 'banner7';
		$params['is_enable'] = 1;
		$banners = $this->image_model->select($params);
		$data['banner']['banner7'] = $banners[0];

		// Get quotations
		$params['type'] = 'quotation';
		$params['is_enable'] = 1;
		$data['quotations'] = $this->post_model->select($params);

		// Get quotations2
		$params['type'] = 'quotation2';
		$params['is_enable'] = 1;
		$data['quotations2'] = $this->post_model->select($params);

		// Get quotations3
		$params['type'] = 'quotation3';
		$params['is_enable'] = 1;
		$data['quotations3'] = $this->post_model->select($params);

		// Meta
		unset($params);
		$params['type'] = TYPE_POST;
		$params['is_enable'] = 1;
		$params['name_unsigned'] = "bao-gia";
		$result= $this->postCategory_model->Get($params);
		$category = $result[0];

		$data['title'] = 'Báo Giá';
		$data['meta_keyword'] = $category['meta_keyword'];
		$data['meta_description'] = $category['meta_description'];

		$data['subview'] = 'quotation';
		$this->load->view('main', $data);
	}

	public function get_by_category($name_unsigned = null)
	{
		// Get commom data
		$data = $this->data;

		// Get quotations
		if ($name_unsigned == 'bao-gia-tam-compact'){
			$params['type'] = 'quotation';
			$data['section_header'] = '<span class="title-right">Báo</span> giá tấm Compact';
			$data['title'] = 'Báo giá tấm Compact';
		} else if ($name_unsigned == 'bao-gia-vach-ngan-ve-sinh'){
			$params['type'] = 'quotation2';
			$data['section_header'] = '<span class="title-right">Báo</span> giá vách ngăn vệ sinh';
			$data['title'] = 'Báo giá vách ngăn vệ sinh';
		} else if ($name_unsigned == 'bao-gia-vach-ngan-di-dong'){
			$params['type'] = 'quotation3';
			$data['section_header'] = '<span class="title-right">Báo</span> giá vách ngăn di động';
			$data['title'] = 'Báo giá vách ngăn di động';
		}

		$params['is_enable'] = 1;
		$data['quotations'] = $this->post_model->select($params);

		// Meta
		unset($params);
		$params['type'] = TYPE_POST;
		$params['is_enable'] = 1;
		$params['name_unsigned'] = "bao-gia";
		$result= $this->postCategory_model->Get($params);
		$category = $result[0];

		$data['meta_keyword'] = $category['meta_keyword'];
		$data['meta_description'] = $category['meta_description'];

		$data['subview'] = 'quotation-category';
		$this->load->view('main', $data);
	}

	public function detail($name_unsigned = null)
	{
		// Get commom data
		$data = $this->data;

		// Get Quotation
		$params['is_enable'] = 1;
		$params['name_unsigned'] = $name_unsigned;
		$result = $this->quotation_model->GetDetail($params);

		if (!$result) {
			show_404();
		} else {
			$quotation = $result[0];
			$data['quotation'] = $quotation;
			$data['tags'] = array_filter(explode(',', $quotation['tags']));

			// Get Quotations banner
			unset($params);
			$params['type'] = 'banner7';
			$params['is_enable'] = 1;
			$banners = $this->image_model->select($params);
			$data['banner']['banner7'] = $banners[0];

			// Get Related Quotations
			unset($params);
			$params['type'] = $quotation['type'];
			$params['is_enable'] = 1;
			$params['category_id'] = $quotation['category_id'];
			$data['related_quotations'] = $this->quotation_model->GetRelatedQuotations($quotation['id'], $params, null, 6);

			// Config subview
			$data['title'] = $quotation['name'];
			$data['meta_keyword'] = $quotation['meta_keyword'];
			$data['meta_description'] = $quotation['meta_description'];

			$data['meta_og']['type'] = 'article';
			$data['meta_og']['title'] = $data['title'];
			$data['meta_og']['description'] = $data['meta_description'];
			$data['meta_og']['image'] = base_url() . POST_UPLOAD_PATH . $quotation['avatar'];

			$data['subview'] = 'quotation-detail';
			$this->load->view('main', $data);
		}
	}
}
