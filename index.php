<?php

// Enable error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require autoload.php
require_once('vendor/autoload.php');

// Create instance of Base class
$f3 = Base::instance();

// Define home route
$f3->route('GET /', function() {
   $view = new Template();
   echo $view->render('views/home.html');
});

// Define resume route
$f3->route('GET /resume', function() {
    $view = new Template();
    echo $view->render('views/resume.html');
});

// Define projects route
$f3->route('GET /projects', function() {
    $view = new Template();
    echo $view->render('views/projects.html');
});

// Define contact route
$f3->route('GET /contact', function() {
    $view = new Template();
    echo $view->render('views/contact.html');
});

// Run F3
$f3->run();