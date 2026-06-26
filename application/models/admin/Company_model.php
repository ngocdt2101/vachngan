<?php
class company_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function select()
	{
		$this->db->select("*");
		$this->db->from("company");
		$result = $this->db->get()->result_array();
		return $result[0];
	}

	public function update($params)
	{
		$params['created_at'] = date('Y-m-d h:i:s');
		$params['updated_at'] = date('Y-m-d h:i:s');
		$params['update_by']  = $this->session->userdata['username'];
		$this->db->where('id', $params['id']);
		$result = $this->db->update("company", $params);
		return $result;
	}
}
