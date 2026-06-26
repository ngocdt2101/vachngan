<?php
class Image_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function get_all($param = null)
	{
		$this->db->select("*")
			->from("image")
			->order_by("display_order", "DESC");
		$result = $this->db->get()->result_array();
		return $result;
	}

	function get_by_id($params)
	{
		$this->db->select("*")
			->from("image")
			->where($params)
			->order_by("display_order", "ASC");
		$result = $this->db->get()->result_array();
		if ($result)
			return $result[0];
		else
			return false;
	}

	function get($params, $limit = null)
	{
		$this->db->select("*")
			->from("image")
			->where($params)
			->order_by("display_order", "ASC");
		$result = $this->db->get()->result_array();
		return $result;
	}

	public function insert($params)
	{
		$params['is_enable'] = 1;
		$params['created_at'] = date('Y-m-d h:i:s');
		$params['created_by']  = $this->session->userdata['username'];
		$this->db->insert('image', $params);
		$id = $this->db->insert_id();
		return $id;
	}

	public function update($params)
	{
		$this->db->where("id", $params['id']);
		$result = $this->db->update('image', $params);
		return $result;
	}

	public function delete($params)
	{
		$this->db->where($params);
		$result = $this->db->delete('image');
		return $result;
	}
}
