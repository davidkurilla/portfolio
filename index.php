<?php

// Enable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require autoload.php
require_once('vendor/autoload.php');

// Create instance of Base class
$f3 = Base::instance();

// Define root route
$f3->route('GET /', function() {
   echo "<h1>Hello, world!</h1>";
});

// Run F3
$f3->run();