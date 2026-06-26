<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("admin/product_model");
		$this->load->model("admin/category_model");
		$this->load->model("admin/image_model");
		$this->load->helper('util');
	}

	public function index()
	{
		$params['type'] = TYPE_PRODUCT;
		$params['is_delete'] = 0;
		$products = $this->product_model->select($params);
		$data['subview'] = '/admin/product/index';
		$data['products'] = $products;
		$this->load->view('admin/layout/main', $data);
	}

	public function add()
	{
		$params['type'] = TYPE_PRODUCT;
		$sort = 'name ASC';
		$categories = $this->category_model->select($params, $sort);
		$data['subview'] = '/admin/product/add';
		$data['categories'] = $categories;
		$this->load->view('admin/layout/main', $data);
	}

	public function edit($id = null)
	{
		$params['type'] = TYPE_PRODUCT;
		$params['is_delete'] = 0;
		$sort = 'name ASC';
		$categories = $this->category_model->select($params, $sort);
		$data['categories'] = $categories;

		unset($params);
		$params['id'] = $id;
		$result = $this->product_model->select($params);

		if ($result) {
			$data['product'] = $result[0];
			$data['subview'] = '/admin/product/edit';
			$this->load->view('admin/layout/main', $data);
		} else {
			show_404();
		}
	}

	public function insert()
	{
		$post_data = $this->input->post();

		if ($post_data) {
			$product['name']             = trim($post_data['name']);
			$product['name_unsigned']    = create_slug($product['name']);
			$product['description']      = $post_data['description'];
			$product['content']          = $post_data['content'];
			$product['category_id']      = $post_data['category_id'];
			$product['type']             = TYPE_PRODUCT;
			$product['is_enable']        = $post_data['is_enable'];
			$product['is_on_home']       = $post_data['is_on_home'];
			$product['is_on_menu']       = $post_data['is_on_menu'];
			$product['is_new']           = $post_data['is_new'];
			$product['is_hot']           = $post_data['is_hot'];
			$product['is_included_vat']  = $post_data['is_included_vat'];
			$product['display_order']    = $post_data['display_order'];
			$product['price']            = $post_data['price'];
			$product['promotion_price']  = $post_data['promotion_price'];
			$product['quantity']         = $post_data['quantity'];
			$product['warranty']         = $post_data['warranty'];
			$product['meta_keyword']     = trim($post_data['meta_keyword']);
			$product['meta_description'] = trim($post_data['meta_description']);
			$product['view_count']       = DEFAULT_VIEW_COUNT;
			$avatar                      = upload_image('avatar', IMAGE_UPLOAD_PATH, PRODUCT_IMAGE_WIDTH, PRODUCT_IMAGE_HEIGHT);
			$product['avatar']           = $avatar['name'];
			$product['thumb']            = $avatar['thumb'];

			// Insert Record
			$id = $this->product_model->insert($product);

			// Set parent id into Image table
			$this->link_images_uploaded($post_data['image_ids'], $id);

			// Set response to Client
			echo json_encode(array(
				'success' => true
			));
		}
	}

	public function update()
	{
		$post_data = $this->input->post();

		if ($post_data) {
			$product['id']               = $post_data['id'];
			$product['name']             = trim($post_data['name']);
			$product['name_unsigned']    = create_slug($product['name']);
			$product['description']      = $post_data['description'];
			$product['content']          = $post_data['content'];
			$product['category_id']      = $post_data['category_id'];
			$product['type']             = TYPE_PRODUCT;
			$product['is_enable']        = $post_data['is_enable'];
			$product['is_on_home']       = $post_data['is_on_home'];
			$product['is_on_menu']       = $post_data['is_on_menu'];
			$product['is_new']           = $post_data['is_new'];
			$product['is_hot']           = $post_data['is_hot'];
			$product['is_included_vat']  = $post_data['is_included_vat'];
			$product['display_order']    = $post_data['display_order'];
			$product['price']            = $post_data['price'];
			$product['promotion_price']  = $post_data['promotion_price'];
			$product['quantity']         = $post_data['quantity'];
			$product['warranty']         = $post_data['warranty'];
			$product['meta_keyword']     = trim($post_data['meta_keyword']);
			$product['meta_description'] = trim($post_data['meta_description']);
			if(array_key_exists('avatar', $_FILES)){
				$avatar                  = upload_image('avatar', IMAGE_UPLOAD_PATH, PRODUCT_IMAGE_WIDTH, PRODUCT_IMAGE_HEIGHT);
				$product['avatar']       = $avatar['name'];
				$product['thumb']        = $avatar['thumb'];
			}

			// Update Record
			$this->product_model->update($product);

			// Set parent id into Image table
			$this->link_images_uploaded($post_data['image_ids'], $product['id']);

			// Set response to Client
			echo json_encode(array(
				'success' => true
			));
		}
	}

	public function delete()
	{
		$post_data = json_decode(file_get_contents('php://input'), true);

		if ($post_data) {
			$ids = $post_data['ids'];
			foreach ($ids as $id) {
				// Delete Avatar
				$params['id'] = $id;
				$product = $this->product_model->select($params);
				if(isset($product[0])){
					unlink(IMAGE_UPLOAD_PATH . $product[0]['avatar']);
					unlink(IMAGE_UPLOAD_PATH . $product[0]['thumb']);
				}

				// Delete Images
				unset($params);
				$params['parent_id'] = $id;
				$params['type'] = TYPE_PRODUCT;
				$images = $this->image_model->get($params);
				foreach ($images as $image) {
					$this->image_model->delete($params);
					unlink(IMAGE_UPLOAD_PATH . $image['name']);
					unlink(IMAGE_UPLOAD_PATH . $image['thumb']);
				}

				// Delete product
				unset($params);
				$params['id'] = $id;
				$this->product_model->delete($params);
			}

			echo json_encode(array(
				"success" => true
			));
		}
	}

	public function link_images_uploaded($str_ids, $parent_id)
	{
		// Insert parent_id, type
		$image_ids = explode(',', $str_ids);
		foreach ($image_ids as $key => $image_id) {
			$params['id']            = $image_id;
			$params['parent_id']     = $parent_id;
			$params['type']          = TYPE_PRODUCT;
			$params['display_order'] = $key;
			$this->image_model->update($params);
		}

		// Delete image error
		unset($params);
		$params['parent_id'] = null;
		$params['type'] = null;
		$images = $this->image_model->get($params);
		foreach ($images as $image) {
			unlink(IMAGE_UPLOAD_PATH . $image['name']);
			unlink(IMAGE_UPLOAD_PATH . $image['thumb']);
		}
		$this->image_model->delete($params);

	}

	public function update_display_order()
	{
		$post_data = json_decode(file_get_contents('php://input'), true);

		if ($post_data) {
			$params['id'] = $post_data['id'];
			$params['display_order'] = $post_data['display_order'];
			$result = $this->product_model->update($params);
			echo json_encode(array(
				"success" => $result
			));
		}
	}

	public function update_status()
	{
		$post_data = json_decode(file_get_contents('php://input'), true);

		if ($post_data) {
			$params['id']        = $post_data['id'];
			$params['is_enable'] = $post_data['is_enable'];
			$result = $this->product_model->update($params);
			echo json_encode(array(
				"success" => $result
			));
		}
	}

	public function update_show_on_home()
	{
		$post_data = json_decode(file_get_contents('php://input'), true);

		if ($post_data) {
			$params['id']         = $post_data['id'];
			$params['is_on_home'] = $post_data['is_on_home'];
			$result = $this->product_model->update($params);
			echo json_encode(array(
				"success" => $result
			));
		}
	}

	public function update_is_hot()
	{
		$post_data = json_decode(file_get_contents('php://input'), true);

		if ($post_data) {
			$params['id']     = $post_data['id'];
			$params['is_hot'] = $post_data['is_hot'];
			$result = $this->product_model->update($params);
			echo json_encode(array(
				"success" => $result
			));
		}
	}

	public function insert_image()
	{
		$image = upload_image('image', IMAGE_UPLOAD_PATH, PRODUCT_IMAGE_WIDTH, PRODUCT_IMAGE_HEIGHT);

		if(isset($image['name'])){
			$id = $this->image_model->insert($image);
			echo json_encode(array(
				"id" => $id,
				"success" => true
			));
		}
	}

	public function select_image()
	{
		$post_data = json_decode(file_get_contents('php://input'), true);
		if ($post_data) {
			$params['parent_id'] = $post_data['id'];
			$params['type'] = TYPE_PRODUCT;
			$images = $this->image_model->get($params);

			echo json_encode(array(
				"success" => true,
				"images" => $images
			));
		}
	}

	public function delete_image()
	{
		$post_data = json_decode(file_get_contents('php://input'), true);

		if ($post_data) {
			$params['id'] = $post_data['id'];

			// Get id before delete to send client
			$image = $this->image_model->get_by_id($params);

			if ($image) {
				// Delete file
				$this->image_model->delete($params);
				unlink(IMAGE_UPLOAD_PATH . $image['name']);
				unlink(IMAGE_UPLOAD_PATH . $image['thumb']);

				echo json_encode(array(
					"id" => $image['id'],
					"success" => true
				));
			}
		}
	}
}
