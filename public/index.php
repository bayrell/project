<?php

define( "BASE_PATH", dirname(__DIR__) );
$loader = require_once BASE_PATH . "/vendor/autoload.php";

/* Add autoloader */
$loader->addPsr4("App\\",  BASE_PATH . "/var/php/App");

/* Run web app */
\Runtime\rtl::runApp("App", "App.Main");
