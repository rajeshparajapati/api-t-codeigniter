<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart_model extends CI_Model {

	function add_to_cart($post) {
		$existing_product = $this->get_exist_cart_product($post['product_id']);
		if(empty($existing_product)) {
			// new product add to cart
			$cart = array('user_id'=>1,'product_id'=>$post['product_id']);
			$this->db->insert('cart',$cart);
		}else{
			// product exist against user id update only quantity
			$this->db->set('quantity', 'quantity+1', FALSE);
			$this->db->where('cart_id',$existing_product['cart_id']);
			$this->db->update('cart');	
		}
	}

	// check product already exist
	function get_exist_cart_product($product_id){
		$this->db->select();
		$this->db->from('cart');
		$this->db->where('product_id',$product_id);
		$this->db->where('user_id',1);
		return $this->db->get()->row_array();
	}

	function get_cart(){
		$this->db->select();
		$this->db->from('cart c');
		$this->db->join('products p','p.product_id=c.product_id');
		$this->db->join('users u','u.user_id=c.user_id','left');
		$this->db->order_by('cart_id',"DESC");		
		return $this->db->get()->result_array();
	}

	function get_user_cart($post){
		$this->db->select();
		$this->db->from('cart c');
		$this->db->join('products p','p.product_id=c.product_id');
		$this->db->join('users u','u.user_id=c.user_id','left');
		$this->db->where('u.user_id',$post['user_id']);
		return $this->db->get()->result_array();
	}
}
?>