<?php

/**
 * Absolute path to the current directory. Used to ensure that pathing is correct
 * 
 */
 
define("BASE_DIR", dirname(__FILE__));

/**
 * Defines whether we're in production or development
 */

define("TINY_ENV", "development");


//let's get started
require BASE_DIR . '/system/tinyMvc.php';
