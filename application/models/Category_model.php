<?php
class Category_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function select($param = null, $order_by = null, $limit = null)
	{
		$this->db->select("*");
		$this->db->from("category");

		if ($param) {
			$this->db->where($param);
		}

		if ($limit) {
			$this->db->limit($limit);
		}

		if ($order_by) {
			$this->db->order_by($order_by);
		} else {
			$this->db->order_by("display_order ASC");
		}

		$result = $this->db->get()->result_array();
		return $result;
	}
}
