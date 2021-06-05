<?php

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('WEBSITE') ? null : define('WEBSITE', $_SERVER['SERVER_NAME'] . DS . 'PHP_Practice'. DS . 'EcoCyrus');
defined('SITE_ROOT') ? null : define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . 'PHP_Practice'. DS . 'EcoCyrus' . DS);
defined('PUBLIC_PATH') ? null : define('PUBLIC_PATH', 'http://' . WEBSITE . DS . 'Public' . DS); //change to directory
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'public'. DS . 'includes' . DS);
defined('INCLUDES_ADMIN_PATH') ? null : define('INCLUDES_ADMIN_PATH', SITE_ROOT . DS . 'public'. DS . 'admin' . DS . 'includes' . DS);

ob_start();

require_once('function.php');
require_once('config.php');

require_once('classes' .DS . 'Database.php');
require_once('classes' .DS . 'Table.php');
