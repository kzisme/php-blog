<?php if( !defined("BASE_DIR") ) exit("No Direct Script Access Allowed");

/**
 * Router Class
 * 
 * @package TinyMVC
 * @author Kyle Keiper <kkeiper1103@gmail.com>
 * @since 1.0
 */

class Router{
	
	private $tiny = null;
	
	private $route = '';
	
	private $routes = array();
	
	public function __construct(){
		
		$this->tiny = TinyMVC::get_instance();
		
		require_once BASE_DIR . "/application/config/routes.php";
		$this->routes = $routes;
		
	}
	
	public function route(){
		
		$url_segments = substr( $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'], strpos($_SERVER['REQUEST_URI'], $this->tiny->conf("base_url") . $this->tiny->conf("index_page") ));
		var_dump($url_segments);
		$segments = explode("/", $url_segments);
		
		echo "<pre>";
		var_dump( $this->tiny->conf("base_url") . $this->tiny->conf("index_page") );
		echo "</pre>";
		
		if( array_key_exists( $url_segments, $this->routes ) ){
			
			$this->route = $this->routes[$url_segment];
			
		}
		else{
			
			
			
		}
		
		var_dump($this->route);
		
	}
	
}
