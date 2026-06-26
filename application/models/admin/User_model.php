<?php
class User_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function get($params)
	{
		$this->db->select("*")
			->from("user")
			->where($params);
		$result = $this->db->get()->result_array();
		return $result;
	}

	function update($params)
	{
		$params['updated_at'] = date('Y-m-d h:i:s');
		$params['update_by']  = $this->session->userdata['username'];
		$this->db->where('id', $params['id']);
		$result = $this->db->update("user", $params);
		return $result;
	}
}
