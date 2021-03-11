<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{

	function add_product($post) {
		$product = array('product_name'=>$post['product_name'],
			'product_price'=>$post['product_price']
		);
		$this->db->insert('products',$product);
		$last_id = $this->db->insert_id();
		if($last_id){
			foreach ($post['images'] as $path) {
				$product_images = array('product_id'=>$last_id,'image_path'=>base_url('assets/admin/product-images/').$path['file_name']);
				$this->db->insert('product_images',$product_images);
			}
		}
	}

	function get_product_list(){
		$this->db->select();
		$this->db->from('products');
		$this->db->order_by('product_id','DESC');
		return $this->db->get()->result_array();
	}

	function get_product_detail($product_id){		
		$this->db->select();
		$this->db->from('products');
		$this->db->where('product_id',$product_id);
		$product = $this->db->get()->row_array();
		if(!empty($product)){
			$product['images'] = $this->get_product_images($product['product_id']);
		}
		return $product;
	}

	function get_product_images($product_id) {
		$this->db->select();
		$this->db->from('product_images');
		$this->db->where('product_id',$product_id);
		return $this->db->get()->result_array();
	}	
}