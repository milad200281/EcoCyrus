<?php
defined('DS') ? null : define('DS', "/");
defined('SITE_ROOT') ? null : define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . 'PHP_Practice' . DS . 'EcoCyrus' . DS);
include(SITE_ROOT . 'Resources/init.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="The Official Website of EcoCyrus. The Future Starts Now" />
    <meta name="keywords" content="eco, cyrus, EcoCyrus, ai, tech, technology, smart, database, programming, code, future" />
    <meta name="author" content="Milad Mobini" />

    <!-- Links -->
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Playfair+Display:wght@400;700&family=Roboto:ital,wght@0,400;0,700;1,300;1,700&display=swap" rel="stylesheet" />
    <!-- favIcon  -->
    <link rel="shortcut icon" href="<?php echo PUBLIC_PATH ?>img/EcoCyrus solo logo.ico" type="image/x-icon" />
    <!-- main style css -->
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH ?>css/style.css" />
    <!-- mouseEffect -->
    <link rel="stylesheet" href="<?php echo PUBLIC_PATH ?>css/mouseEffect.css" />

    <!-- Scripts -->
    <!-- Google JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Font Awesome -->
    <script src="<?php echo PUBLIC_PATH ?>fontawesome-free-5.15.2-web/js/all.js"></script>
    <!-- TypeEffect js -->
    <script type="module" src="<?php echo PUBLIC_PATH ?>js/Typer.js"></script>