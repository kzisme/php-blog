<?php if( !defined("BASE_DIR") ) exit("No Direct Script Access Allowed");

// TO-DO: Document class

class Controller {
	private $load;
	private $model;

	public function __construct()
	{
		$this->load = new Load();
		$this->model = new Model();

		//determines what page you're on
		$this->home();
	}

	public function home()
	{
		$data = $this->model->user_info();
		
		$this->load->helper("url");
		$this->load->view("someview", $data);
	}
	
	
}
