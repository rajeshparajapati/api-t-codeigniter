<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Core_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('admin/Product_model','product');
	}

	function index(){
		$this->data['active'] = 'product';
		$this->data['title'] = 'Product List';
		$this->data['product_llist'] = $this->product->get_product_list();	
		$views[] = 'admin/product/product-list';
		$this->admin_view($views);
	}

	function view($product_id=0){
		if($product_id==0) die; // redirect to 404 page
		$this->data['product_detail']=$product_detail = $this->product->get_product_detail($product_id);
		if(empty($product_detail)) die; // redirect to 404 page
		$this->data['active'] = 'product';
		$this->data['title'] = 'Product Detail';
		$views[] = 'admin/product/product-detail';
		$this->admin_view($views);
	}

	function add_product(){
		$post = $this->input->post();
		if(!empty($post)) {
			if( isset($_FILES['product_image']['tmp_name']) && !empty($_FILES['product_image']['tmp_name']) ) { 				
				$uploadinfo = upload_files('admin/product-images/','product_image','jpg|jpeg|png');	
				$post['images'] = $uploadinfo;					
				$this->product->add_product($post);
				echo 'success####Added Successfully'; die;
			}else{
				echo 'error####Image Not found!'; die;
			}
		}
		$this->data['active'] = 'product';
		$this->data['title'] = 'Product Add';
		$views[] = 'admin/product/product-add';
		$this->admin_view($views);
	}
}