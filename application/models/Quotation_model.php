<?php
class Quotation_Model extends CI_Model
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

	function GetDetail($params = null)
	{
		$this->db->select("*");
		$this->db->from("post");

		if ($params) {
			$this->db->where($params);
			$this->db->where("type = 'quotation' or type = 'quotation2' or type = 'quotation3'");
		}

		$this->db->limit(1);

		$result = $this->db->get()->result_array();

		if (isset($result)){
			unset($params);
			$params['id'] = $result[0]["id"];
			$params['view_count'] = $result[0]["view_count"] + 1;
			$this->db->where('id', $params["id"]);
			$this->db->update("post", $params);
			return $result;
		}
		else {
			return null;
		}
	}

	function GetRelatedQuotations($id, $params = null, $order_by = null, $limit = null)
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
}
