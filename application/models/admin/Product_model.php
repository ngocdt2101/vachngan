<?php
class Product_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function select($params = null, $sort = null)
	{
		$this->db->select("product.*, category.name AS category_name");
		$this->db->from("product");
		$this->db->join('category', 'product.category_id = category.id', 'left');

		if($params) {
			foreach ($params as $key => $value) {
				$product_params['product.' . $key] = $value;
			}
			$this->db->where($product_params);
		}

		if ($sort) {
			$this->db->order_by($sort);
		} else {
			$this->db->order_by("updated_at DESC");
		}

		$result = $this->db->get()->result_array();
		return $result;
	}

	public function insert($params)
	{
		$params['is_delete']  = 0;
		$params['created_at'] = date('Y-m-d h:i:s');
		$params['updated_at'] = date('Y-m-d h:i:s');
		$params['update_by']  = $this->session->userdata['username'];
		$this->db->insert('product', $params);
		$id = $this->db->insert_id();
		return $id;
	}

	public function delete($ids)
	{
		if (is_array($ids)) {
			$this->db->where_in('id', $ids);
		} else {
			$this->db->where('id', $ids);
		}
		$result = $this->db->delete('product');
		return $result;
	}

	public function update($params)
	{
		$params['updated_at'] = date('Y-m-d h:i:s');
		$params['update_by']  = $this->session->userdata['username'];
		$this->db->where('id', $params['id']);
		$result = $this->db->update("product", $params);
		return $result;
	}
}
