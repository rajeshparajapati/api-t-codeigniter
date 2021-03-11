<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products_model extends CI_Model {

	function get_products_and_images(){
		$product_list = array();
		$this->db->select();
		$this->db->from('products');
		$products = $this->db->get()->result_array();	
		foreach ($products as  $p) {
			$images = $this->get_product_images($p['product_id']);
			$p['images'] = $images;
			$product_list[] = $p;
		}
		return $product_list;
	}

	function get_product_images($product_id){
		$this->db->select();
		$this->db->from('product_images');
		$this->db->where('product_id',$product_id);
		return $this->db->get()->result_array();
	}
	

}