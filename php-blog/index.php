<?php

//Display errors in production mode
ini_set('display_errors', 1);

// define base dir. Used for security and bootstrapping.
define("BASE_DIR", dirname(__FILE__));
define("BASE_URL", $_SERVER['SERVER_NAME'] );

//let's get started
require BASE_DIR . '/system/tinyMvc.php';
