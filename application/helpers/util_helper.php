<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('upload_image')) {
	function upload_image($name, $path, $thumb_width, $thumb_height)
	{
		$CI = &get_instance();
		$CI->load->library(array('upload'));

		if (array_key_exists($name, $_FILES)) {

			if (!file_exists($path)) {
				mkdir($path, 777, true);
			}

			$config['upload_path']   = $path;
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['overwrite']     = false;
			$config['max_size']      = 10240;
			$config['encrypt_name']  = true;

			$CI->upload->initialize($config);
			if ($CI->upload->do_upload($name)) {
				$fileInfo      = $CI->upload->data();
				$name          = $fileInfo['file_name'];
				$thumb         = create_thumb($fileInfo, $thumb_width, $thumb_height);
				$path_full     = $path . $fileInfo['file_name'];
				return ['name' => $name, 'thumb' => $thumb, 'path' => $path_full];
			}
			return ['name' => NULL, 'thumb' => NULL, 'path' => NULL];
		}
	}
}

if (!function_exists('create_thumb')) {
	function create_thumb($fileInfo, $new_width, $new_height)
	{
		$CI = &get_instance();
		$CI->load->library(array('image_lib'));

		$extension = pathinfo($fileInfo['file_name'], PATHINFO_EXTENSION);
		$base_name = basename($fileInfo['file_name'], '.' . $extension);
		$cropped_name = $base_name . '_.' . $extension;
		$thumb_name = $base_name . '_thumb.' . $extension;

		// Config to cropping
		$config = array(
			'image_library' => 'gd2',
			'source_image' => $fileInfo['full_path'],
			'new_image' => $fileInfo['file_path'],
			'maintain_ratio' => FALSE,
			'create_thumb' => TRUE,
			'thumb_marker' => '_',
		);

		//Set cropping for y or x axis, depending on image orientation
		if ($fileInfo['image_width'] / $fileInfo['image_height'] > $new_width / $new_height) {
			$config['width'] = round($fileInfo['image_height'] * $new_width / $new_height);
			$config['height'] = $fileInfo['image_height'];
			$config['x_axis'] = round(($fileInfo['image_width'] - $config['width']) / 2);
		} else {
			$config['height'] = round($fileInfo['image_width'] * $new_height / $new_width);
			$config['width'] = $fileInfo['image_width'];
			$config['y_axis'] = round(($fileInfo['image_height'] - $config['height']) / 2);
		}

		// Crop image
		$CI->image_lib->initialize($config);
		if ($CI->image_lib->crop()) {
			unset($config);
			$config = array(
				'image_library' => 'gd2',
				'source_image' => $fileInfo['file_path'] . $cropped_name,
				'new_image' => $fileInfo['file_path'],
				'create_thumb' => TRUE,
				'thumb_marker' => 'thumb',
				'width' => $new_width,
				'height' => $new_height
			);

			// Resize image
			$CI->image_lib->initialize($config);
			$CI->image_lib->resize();
			unlink($fileInfo['file_path'] . $cropped_name);
		}

		$CI->image_lib->clear();
		return $thumb_name;
	}
}

if (!function_exists('create_slug')) {
	function create_slug($string)
	{
		$search = array(
			'#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
			'#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
			'#(ì|í|ị|ỉ|ĩ)#',
			'#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
			'#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
			'#(ỳ|ý|ỵ|ỷ|ỹ)#',
			'#(đ)#',
			'#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
			'#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
			'#(Ì|Í|Ị|Ỉ|Ĩ)#',
			'#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
			'#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
			'#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
			'#(Đ)#',
			"/[^a-zA-Z0-9\-\_]/",
		);
		$replace = array(
			'a',
			'e',
			'i',
			'o',
			'u',
			'y',
			'd',
			'A',
			'E',
			'I',
			'O',
			'U',
			'Y',
			'D',
			'-',
		);
		$string = preg_replace($search, $replace, $string);
		$string = preg_replace('/(-)+/', '-', $string);
		$string = trim($string, '-');
		$string = preg_replace('/[^\x20-\x7E]/', '', $string);
		$string = strtolower($string);
		return $string;
	}
}
