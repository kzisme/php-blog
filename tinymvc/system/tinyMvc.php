<?php if( !defined("BASE_DIR") ) exit("No Direct Script Access Allowed");


require_once BASE_DIR . '/system/core/tinyMvc.php';


// bootstrap the application
$tiny = new TinyMVC();

// ... And We Have LIFTOFF!
$tiny->launch();
