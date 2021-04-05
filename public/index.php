<?php
session_start();
/**
 * Simple MVC Framework with URL Controller
 * Version: 1.0
 * Author: degacode
 * Link: https://github.com/dega42
 * License http://opensource.org/licenses/MIT MIT License
 */

// set a constant that holds the project's folder path, like "/var/www/".
// DIRECTORY_SEPARATOR adds a slash to the end of the path
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
// set a constant that holds the project's "application" folder, like "/var/www/application".
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);

// load application config (error reporting etc.)
require APP . 'config/config.php';

// load basic functions
require APP . 'libs/functions.php';

// start the application
require APP . 'core/route.php';
