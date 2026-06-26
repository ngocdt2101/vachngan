<?php
class Company_Model extends CI_Model
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
}
