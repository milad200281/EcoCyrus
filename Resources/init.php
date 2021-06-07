<?php
// / or \
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
// https:www.ecocyrus.com
defined('WEBSITE') ? null : define('WEBSITE', 'http://' . $_SERVER['SERVER_NAME'] . DS . 'PHP_Practice' . DS . 'EcoCyrus' .DS .'public');
// path/
defined('SITE_ROOT') ? null : define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . 'PHP_Practice' . DS . 'EcoCyrus' . DS);
// /public (relative to website)
defined('PUBLIC_PATH') ? null : define('PUBLIC_PATH', DS . 'PHP_Practice' . DS . 'EcoCyrus' . DS . 'Public' . DS); 
//path/public/includes
defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'public' . DS . 'includes' . DS);
//path/public/admin/includes
defined('INCLUDES_ADMIN_PATH') ? null : define('INCLUDES_ADMIN_PATH', SITE_ROOT . DS . 'public' . DS . 'admin' . DS . 'includes' . DS);

ob_start();

require_once('functions.php');
require_once('config.php');

require_once('classes' . DS . 'Database.php');
require_once('classes' . DS . 'Table.php');
require_once('classes' . DS . 'Login.php');

require_once('classes' . DS . 'Session.php');