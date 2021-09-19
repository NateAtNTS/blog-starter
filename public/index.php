<?php

// Set path constants
define('VENDOR_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor');
define('HYII_SRC_PATH', VENDOR_PATH . DIRECTORY_SEPARATOR . 'nateatnts' . DIRECTORY_SEPARATOR . 'base-blog' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR);
define('CONFIG_FILE', HYII_SRC_PATH . "config" . DIRECTORY_SEPARATOR . "web.config.php");
define('APP_TEMPLATES', dirname(__DIR__) . DIRECTORY_SEPARATOR . "templates");

// Load Composer's autoloader
require_once VENDOR_PATH.'/autoload.php';

// Load dotenv?
if (class_exists('Dotenv\Dotenv') && file_exists(dirname(__DIR__) . '/.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__) . '/');
    $dotenv->load();
} else {
    exit("Either the .env file does not exist, or the Dotenv class file does not exist.  Exiting.");
}

$app = require HYII_SRC_PATH . "bootstrap/web.bootstrap.php";
$exitCode = $app->run();
exit($exitCode);