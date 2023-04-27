<?php

$allowed_pages = array('login', 'index', 'home'); // Whitelisting web pages!

$page = isset($_GET['page']) ? $_GET['page'] : 'login'; // Default to login page if 'page' parameter is not set

if (!in_array($page, $allowed_pages)) {
    
    // Invalid page requested, show an error or redirect to default page
    header('Location: login.php');
    exit();
}

// Sanitizing "page" parameter
$page = preg_replace("/[^a-zA-Z]/", "", $page);
$page = str_replace("..", "", $page); // Remove dot dots
$page = $page . '.php';

require_once($page);

?>

