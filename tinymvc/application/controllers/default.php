<?php if( !defined("BASE_DIR") ) exit("No Direct Script Access Allowed");

class Default_Controller extends Controller{
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		
		$this->data['title'] = "First Sub Controller";
		
		$this->load->view("default", $this->data);
	}
	
}
