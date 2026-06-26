<?php
class Category_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function select($params = null, $sort = null)
	{
		$this->db->select("category.*, parent_category.name AS parent_name");
		$this->db->from("category");
		$this->db->join('category as parent_category', 'category.parent_id = parent_category.id', 'left');

		if ($params) {
			foreach ($params as $key => $value) {
				$category_params['category.' . $key] = $value;
			}
			$this->db->where($category_params);
		}

		if ($sort) {
			$this->db->order_by($sort);
		} else {
			$this->db->order_by("updated_at DESC");
		}

		$result = $this->db->get()->result_array();
		return $result;
	}

	function select_sub($params = null, $sort = null)
	{
		$this->db->select("*");
		$this->db->from("category");

		if ($params) {
			$this->db->where($params);
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
		$this->db->insert('category', $params);
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
		$result = $this->db->delete('category');
		return $result;
	}

	public function update($params)
	{
		$params['updated_at'] = date('Y-m-d h:i:s');
		$params['update_by']  = $this->session->userdata['username'];
		$this->db->where('id', $params['id']);
		$result = $this->db->update("category", $params);
		return $result;
	}
}
