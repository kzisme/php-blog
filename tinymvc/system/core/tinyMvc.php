<?php if( !defined("BASE_DIR") ) exit("No Direct Script Access Allowed");

/**
 * @package TinyMVC
 * 
 * @author Kyle Keiper <kkeiper1103@gmail.com>
 * 
 */

require_once BASE_DIR . '/system/core/load.php';
require_once BASE_DIR . '/system/core/model.php';
require_once BASE_DIR . '/system/core/controller.php';
require_once BASE_DIR . '/system/core/router.php';

/**
 * TinyMVC Singleton Class
 * 
 * @package TinyMVC
 * @author Kyle Keiper <kkeiper1103@gmail.com>
 */

class TinyMVC{
	
	/**
	 * Singleton of the TinyMVC application
	 * 
	 * @staticvar TinyMVC
	 * @access private
	 */
	 
	private static $tiny;
	
	/**
	 * config associative array
	 * 
	 * @var array
	 * @access public
	 */
	
	public $config = array();
	
	/**
	 * Router Instantiation
	 * 
	 * @var Router
	 * @access private
	 */
	
	private $router = null;
	
	
	/**
	 * Constructor for TinyMVC
	 * 
	 * @return null
	 */
	 
	public function __construct(){
		
		// to set a static variable from an instance,
		// use the scope operator, ::
		self::$tiny = $this;
		
		$this->config = $this->load_config();
		
		
		if( strcmp(TINY_ENV, "development") == 0 ){
			require( BASE_DIR . '/system/errors/php_error.php' );
    		\php_error\reportErrors();
		}
		else{
			ini_set("display_errors", "Off");
		}
		
		
		$this->router = new Router();
		$this->router->route();
		
		
		
	}
	
	/**
	 * Launches the TinyMVC Application
	 * 
	 * @return null
	 */
	 
	public function launch(){
		
		// legacy thing to make it work.
		// TO-DO: Load the stuff differently.
		
		$this->cont = new Controller();
	}
	
	/**
	 * Shows Document For Specified Status Code
	 * 
	 * @param int $code HTTP Status Code
	 * @return null
	 */
	
	public function show_error( $code ){
		
		// TO-DO: output correct HTTP header based on code
		
		include BASE_DIR . "/system/errors/{$code}.php";
		
	}
	
	/**
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
	
	
	/**
	 * 
	 * 
	 * 
	 */
	
	private function load_config(){
		require BASE_DIR . "/application/config/config.php";
		
		$this->config = $config;
		
	}
	
	/**
	 * Config function. Does different stuff based on number of arguments given
	 * 
	 * @param String $key Gets or set the given key
	 * @param String|int|object $value Sets the given Key
	 * 
	 * @return instanceof $key | boolean
	 */
	 
	 public function conf( $key = null, $value = null ){
	 	
		// this is weird. Gotta figure this out.
		$this->load_config();
		
	 	$num_args = func_num_args();
		
		$key_parts = explode("/", $key);
		
		switch( $num_args ){
			case 1:
				
				if( sizeof($key_parts) > 1 ){
					
					/**
					 * @todo implement subarray access as delimited by '/'
					 * 
					 * Example:
					 * $this->config("database/dsn");
					 * 
					 * return $config['database']['dsn'];
					 */
					
				}
				
				if( array_key_exists($key, $this->config) ){
					return $this->config[$key];
				}
				else {
					return false;
				}
				
				break;
			case 2:
				$this->config[$key] = $value;
				return true;
				break;
			default:
				break;
		}
	 	
	 }
	
}
