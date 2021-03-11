<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Core_Controller extends CI_Controller{
	
	protected $data;
	function __construct(){
		parent::__construct();
	}

	function admin_view($views){
		$this->load->view('admin/common/header', $this->data);
		$this->load->view('admin/common/sidebar', $this->data);
		foreach($views as $view) $this->load->view($view, $this->data);
		$this->load->view('admin/common/footer', $this->data);
	}
}