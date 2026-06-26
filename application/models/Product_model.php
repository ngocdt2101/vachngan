<?php
class Product_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function select($params = null, $order_by = null, $limit = null)
	{
		$this->db->select("product.*, category.name AS category_name,  category.name_unsigned AS category_name_unsigned");
		$this->db->from("product");
		$this->db->join('category', 'product.category_id = category.id');

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

	function GetRelatedProducts($id, $params = null, $order_by = null, $limit = null)
	{
		$this->db->select("product.*, category.name AS category_name,  category.name_unsigned AS category_name_unsigned");
		$this->db->from("product");
		$this->db->join('category', 'product.category_id = category.id');

		$this->db->where('product.id !=', $id);
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


	function search($key_word = null, $params = null, $limit = null)
	{
		$this->db->select("product.*, category.name AS category_name,  category.name_unsigned AS category_name_unsigned");
		$this->db->from("product");
		$this->db->join('category', 'product.category_id = category.id');

		if ($params) {
			$this->db->where($params);
		}

		$this->db->like('product.name', $key_word);
		$this->db->or_like('category.name', $key_word);
		$this->db->order_by("display_order ASC");

		if ($limit) {
			$this->db->limit($limit);
		}

		$result = $this->db->get()->result_array();
		return $result;
	}
}
