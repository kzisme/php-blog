<?php if( !defined("BASE_DIR") ) exit("No Direct Script Access Allowed");

function base_url(){
	
	$tiny =& TinyMVC::get_instance();
	
	$url = $tiny->config['base_url'] . $tiny->config['index_page'];
	
	return $url;
}
