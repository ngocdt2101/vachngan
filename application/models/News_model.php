<?php
class News_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function Get($params = null, $order_by = null, $limit = null)
	{
		$this->db->select("*");
		$this->db->from("post");
		if ($params) {
			$this->db->where($params);
		}

		if ($order_by) {
			$this->db->order_by($order_by);
		} else {
			$this->db->order_by("display_order ASC");
		}

		if ($limit) {
			$this->db->limit($limit);
		}

		$result = $this->db->get()->result_array();
		return $result;
	}

	function GetRelatedNews($id, $params = null, $order_by = null, $limit = null)
	{
		$this->db->select("*");
		$this->db->from("post");

		$this->db->where('id !=', $id);
		if ($params) {
			$this->db->where($params);
		}

		if ($order_by) {
			$this->db->order_by($order_by);
		} else {
			$this->db->order_by("display_order ASC");
		}

		if ($limit) {
			$this->db->limit($limit);
		}

		$result = $this->db->get()->result_array();
		return $result;
	}

	public function Update($params)
	{
		$params['updated_at'] = date('Y-m-d h:i:s');
		$this->db->where('id', $params['id']);
		$result = $this->db->update("post", $params);
		return $result;
	}
}
