<?php if( !defined("BASE_DIR") ) exit("No Direct Script Access Allowed");

/**
 * Model Class. Extend this for the full Model functionality
 * 
 * @package TinyMVC
 * @author kzisme
 * @since 1.0
 * 
 */

class Model {
	
	/**
	 * @var $connection
	 * @access private
	 */
	 
	 private $connection = null;
	 
	 
	 
	 /**
	  * Model Constructor. Initializes the db connection
	  *
	  * @method __construct
	  * @return Model
	  */
	
	public function __construct(){
		
		require_once BASE_DIR . "/system/database/TinyDB.php";
		$this->connection = new TinyDB();
		
	}
	
	/**
	 * toString Method for Testing
	 * 
	 * @method toString
	 * @return String (JSON Encoded)
	 */
	
	public function toString(){
		return json_encode( $this );
	}

}
