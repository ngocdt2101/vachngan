<?php
class About_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function select()
	{
		$params['type'] = 'about';
		$params['is_enable'] = 1;

		$this->db->select("*");
		$this->db->from("post");
		$this->db->where($params);

		$result = $this->db->get()->result_array();
		return $result[0];
	}
}
