<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('webservices/Cart_model','cart');
	}
	function add_to_cart(){
		$apiData = (array) json_decode($this->input->raw_input_stream);
		$this->cart->add_to_cart($apiData);
		send_response(true,array(),'Add Successfully');
	}

	function get_cart(){
		$cart = $this->cart->get_cart();
		send_response(true,$cart,'Add Successfully');
	}

	function get_user_cart(){
		$apiData = (array) json_decode($this->input->raw_input_stream);
		$cartdetail = $this->cart->get_user_cart($apiData);
		send_response(true,$cartdetail,'');
	}


}