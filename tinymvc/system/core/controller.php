<?php if( !defined("BASE_DIR") ) exit("No Direct Script Access Allowed");

/**
 * Controller Class. Handles Loading the Correct Model and View.
 * 
 * Eventually will need to extend this in application controllers.
 * 
 * @author kzisme
 * @since 1.0
 * 
 * @package TinyMVC
 * 
 */

class Controller {
	
	/**
	 * The Loader class for loading all views, helpers and models, and more
	 * 
	 * @var Load $load
	 * @access private
	 */
	
	private $load = null;
	
	/**
	 * Data Array for data that gets expanded
	 *
	 * @var array $data
	 * @access private
	 */
	 
	private $data = array();
	
	

	public function __construct()
	{
		$this->load = new Load();

	}
	
}
