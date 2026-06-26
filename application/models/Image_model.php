<?php
class Image_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function select($params = null, $order_by = null)
	{
		$this->db->select("*");
		$this->db->from("image");

		if ($params) {
			$this->db->where($params);
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
