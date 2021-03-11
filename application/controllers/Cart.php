<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends Core_Controller{

	function index(){
		$this->data['active'] = 'cart';
		$this->data['title'] = 'Cart List';
		$this->data['carts'] = request('cart/get_cart');			
		$views[] = 'admin/cart/cart-list';
		$this->admin_view($views);
	}
}