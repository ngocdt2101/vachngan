<?php
class Post_Model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function select($params = null, $order_by = null)
	{
		$this->db->select("post.*, post_category.name AS category_name");
		$this->db->from("post");
		$this->db->join('post_category', 'post.category_id = post_category.id', 'left');

		if ($params) {
			foreach ($params as $key => $value) {
				$post_params['post.' . $key] = $value;
			}
			$this->db->where($post_params);
		}

		if ($order_by) {
			$this->db->order_by($order_by);
		} else {
			$this->db->order_by("updated_at DESC");
		}

		$result = $this->db->get()->result_array();
		return $result;
	}

	function select_by_post_id($post_id)
	{
		$params['id'] = $post_id;
		$this->db->select("*");
		$this->db->from("post");
		$this->db->where($params);
		
		$result = $this->db->get()->result_array();

		if (isset($result)){
			return $result[0];
		}
		else {
			return null;
		}
	}

	public function insert($params)
	{
		$params['is_delete']  = 0;
		$params['view_count'] = 4321;
		$params['created_at'] = date('Y-m-d h:i:s');
		$params['updated_at'] = date('Y-m-d h:i:s');
		$params['update_by']  = $this->session->userdata['username'];
		$this->db->insert('post', $params);
		$result = $this->db->insert_id();
		return $result;
	}

	public function update($params)
	{
		$params['updated_at'] = date('Y-m-d h:i:s');
		$params['update_by']  = $this->session->userdata['username'];
		$this->db->where('id', $params['id']);
		$result = $this->db->update("post", $params);
		return $result;
	}

	public function delete($ids)
	{
		if (is_array($ids)) {
			$this->db->where_in('id', $ids);
		} else {
			$this->db->where('id', $ids);
		}
		$result = $this->db->delete('post');
		return $result;
	}
}
