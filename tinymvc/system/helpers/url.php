<?php if( !defined("BASE_DIR") ) exit("No Direct Script Access Allowed");

/**
 * @author Kyle Keiper <kkeiper1103@gmail.com>
 * @package TinyMVC 
 *
 * @since 1.0
 * 
 * @return string $url Returns the BaseURL of the site as specified by the config
 */

function base_url(){
	
	$tiny =& TinyMVC::get_instance();
	
	$url = $tiny->config['base_url'] . $tiny->config['index_page'];
	
	return $url;
}
