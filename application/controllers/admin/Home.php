<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin/user_model");
		$this->load->model("admin/counter_model");
	}

	public function index()
	{
		$data['subview'] = '/admin/index';
		$data['title'] = 'Admin System';
		$this->load->view('admin/layout/main', $data);
	}

	public function count_visiter()
	{
		$post_data = json_decode(file_get_contents('php://input'), true);
		if ($post_data) {
			$days_in_month = cal_days_in_month(CAL_GREGORIAN, $post_data['month'], $post_data['year']);
			$params['start_date']  = $post_data['year'] . '-' . $post_data['month'] . '-' . '01';
			$params['end_date'] = $post_data['year'] . '-' . $post_data['month'] . '-' . $days_in_month;
			$visiter_couter = $this->counter_model->select($params);

			for ($i = 0; $i < $days_in_month; $i++) {
				$value = 0;
				foreach ($visiter_couter as $visiter) {
					if ($visiter['day'] == $i + 1) {
						$value = $visiter['access_number'];
						break;
					}
				}
				$char_data[$i] = ['key' => $i + 1, 'value' => $value];
			}

			echo json_encode(array(
				'charData' => $char_data
			));
		}
	}
}
