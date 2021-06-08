<?php
function classAutoLoader($class)
{
    $class = strtolower($class);
    $the_path = "classes/{$class}.php";
    if (file_exists($the_path) && !class_exists($class)) {
        require_once($the_path);
    } else {
        die("This file name '{$class}.php' was not found");
    }
}
spl_autoload_register('classAutoLoader');



/**
 * redirect to the given path
 * @param string path
 */
function redirect($path)
{
    header("Location: $path");
}

/**
 * redirect to Not Found (404) page
 */
function redirect404()
{
    redirect('404');
}
/**
 * redirect to Access Denied (401) page
 */
function redirect401()
{
    redirect('401');
}
/**
 * redirect to Forbidden (403) page
 */
function redirect403()
{
    redirect('403');
}

/**
 * check if there is a request and it is post with the given value
 * @param string $value the key in the post request
 * @return true if it is
 * @return false if it is not
 */
function isPost($value)
{
    return $_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["$value"]);
}
/**
 * check if there is a request and it is get with the given value
 * @param string $value the key in the get request
 * @return true if it is
 * @return false if it is not
 */
function isGET($value)
{
    return $_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET["$value"]);
}