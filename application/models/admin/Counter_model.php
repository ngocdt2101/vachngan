<?php
class Counter_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function select($params)
	{
		$this->db->select("DAY(created_at) AS day, count(id) AS access_number");
		$this->db->from("counter");
		$this->db->where('DATE(created_at) >=', ($params['start_date']));
		$this->db->where('DATE(created_at) <=', ($params['end_date']));
		$this->db->group_by("DAY(created_at)");
		$this->db->order_by("DAY(created_at) ASC");
		$result = $this->db->get()->result_array();
		return $result;
	}

	function insert($params)
	{
		$this->db->insert('counter', $params);
	}
}
