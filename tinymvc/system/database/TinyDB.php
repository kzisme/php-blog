<?php if( !defined("BASE_DIR") ) exit("No Direct Script Access Allowed");

/**
 * @package TinyMVC
 * 
 * @author Kyle Keiper <kkeiper1103@gmail.com>
 * @since 1.0
 * 
 * TinyDB class. PDO extension that is going to support all PDO drivers
 * 
 */

class TinyDB{
	
	/**
	 * PDO connection to the database.
	 *
	 * @var $connection
	 * @access private
	 */
	
	private $connection = null;
	
	/**
	 * Data Source Name
	 * 
	 * @var $dsn
	 * @access private
	 */
	
	private $dsn = '';
	
	/**
	 * Reference to the TinyMVC instance
	 * 
	 * @var $tiny
	 * @access private
	 */
	 
	 private $tiny = null;
	
	/**
	 * Constructor Function. Initializes the Database Connection
	 * By setting the dsn from the configs and such
	 * 
	 * @return TinyDB
	 */
	 
	 public function __construct(){
	 	
		$this->tiny = TinyMVC::get_instance();
		
		/**
		 * @todo Set the DSN based on the configs
		 * 
		 */
		 
		 $this->dsn = $this->tiny->config('database/dsn');
		
		
		
	 }
	
}
