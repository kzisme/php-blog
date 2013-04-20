<?php if( !defined("BASE_DIR") ) exit("No Direct Script Access Allowed");

/*
 * @package TinyMVC
 * 
 * @author Kyle Keiper <kkeiper1103@gmail.com>
 * 
 */

require_once BASE_DIR . '/system/core/load.php';
require_once BASE_DIR . '/system/core/model.php';
require_once BASE_DIR . '/system/core/controller.php';

/*
 * TinyMVC Singleton Class
 * 
 * @package TinyMVC
 * @author Kyle Keiper <kkeiper1103@gmail.com>
 */

class TinyMVC{
	
	/*
	 * Singleton of the TinyMVC application
	 * 
	 * @staticvar TinyMVC
	 * @access private
	 */
	 
	private static $tiny;
	
	/*
	 * config associative array
	 * 
	 * @var array
	 * @access public
	 */
	
	public $config = array();
	
	/*
	 * Constructor for TinyMVC
	 * 
	 * @return null
	 */
	 
	public function __construct(){
		
		// to set a static variable from an instance,
		// use the scope operator, ::
		
		self::$tiny = $this;
		
		// TO-DO: set config in it's own file under system or application
		// this is not a good way to do it. Too tightly coupling
		
		$this->config['base_url'] = "http://localhost/php-blog/php-blog/";
		$this->config['index_page'] = "index.php";
		
	}
	
	/*
	 * Launches the TinyMVC Application
	 * 
	 * @return null
	 */
	 
	public function launch(){
		
		// legacy thing to make it work.
		// TO-DO: Load the stuff differently.
		
		$this->cont = new Controller();
	}
	
	/*
	 * Shows Document For Specified Status Code
	 * 
	 * @param int $code HTTP Status Code
	 * @return null
	 */
	
	public function show_error( $code ){
		
		// TO-DO: output correct HTTP header based on code
		
		include BASE_DIR . "/system/errors/{$code}.php";
		
	}
	
	/*
	 * Gets the Current TinyMVC Singleton Reference
	 * 
	 * @return TinyMVC
	 */
	
	public static function get_instance(){
		
		// remember, self refers to the class itself, not the instance
		// self = class
		// $this = class instance
		
		return self::$tiny;
	}
	
}
