<?php if( !defined("BASE_DIR") ) exit("No Direct Script Access Allowed");

/**8
 * @package TinyMVC
 * 
 * @author kzisme
 * @version 1.0
 * 
 */

class Load{
	
	/***
	 * @tiny Reference to the TinyMVC class that was loaded
	 * 
	 * @author Kyle Keiper
	 * @since 1.0
	 */
	private $tiny = null;
	
	public function __construct(){
		
		// set tiny to the instance of the TinyMVC loaded earlier
		// =& assigns the variable to a <<i>>reference<</i>> of TinyMVC,
		// not a copy. $this->tiny literally refers to the $tiny = new TinyMVC(); 
		// in the system/tinyMvc.php file.
		
		$this->tiny =& TinyMVC::get_instance();
	}
	
	/**
	 * Loads the specified view file located at /application/views/$file_name
	 * 
	 * @param string $file_name Name of View to be loaded
	 * @param array $data associative array of data to expand in the view file
	 * @return null
	 */
	
	public function view($file_name, $data = null)
	{
		if( is_array($data) ){
			extract($data);
		}
		
		// String interpolation example. 
		// Variables in double quotes will be expanded upon parsing
		
		$file = BASE_DIR . "/application/views/{$file_name}.php";
		
		if( file_exists( $file ) ){
			include $file;
		}
		else{
			$this->tiny->show_error("404");
		}
		
	}
	
	/**
	 * Loads the specified Model file located at /application/models/$model
	 * @since 1.0
	 * 
	 * @param string $model Name of the Model to be loaded
	 * @return null
	 */
	 
	 public function model( $model ){
	 	
		$file = BASE_DIR . "/application/models/{$model}.php";
		
		if( file_exists($file) ){
			include_once( $file );
		}
		
	 }
	
	/**
	 * Loads the specified Helper file located at /system/helpers/$helper
	 * And then loads the same helper file at /application/helpers
	 * 
	 * @since 1.0
	 * 
	 * @param string $helper name of the Helper to be loaded
	 * @return null
	 */
	
	public function helper( $helper ){
		
		$file = BASE_DIR . "/system/helpers/{$helper}.php";
		if( file_exists($file) ){
			include_once( $file );
		}
		
		$file = BASE_DIR . "/application/helpers/{$helper}.php";
		if( file_exists($file) ){
			include_once( $file );
		} 
		
	}
}




