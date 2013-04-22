<?php

//Display errors in production mode
ini_set('display_errors', 1);

/**
 * Absolute path to the current directory. Used to ensure that pathing is correct
 * 
 */
define("BASE_DIR", dirname(__FILE__));

//let's get started
require BASE_DIR . '/system/tinyMvc.php';
