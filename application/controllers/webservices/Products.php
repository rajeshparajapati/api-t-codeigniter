<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('webservices/Products_model','product');
	}

	function get_products_and_images(){
		$products = $this->product->get_products_and_images();
		send_response(true,$products,'');
	}

}

