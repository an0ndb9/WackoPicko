<?php

$allowed_pages = array('login', 'index', 'home'); // Whitelisting web pages!

$page = isset($_GET['page']) ? $_GET['page'] : 'login'; // Default to login page if 'page' parameter is not set

if (!in_array($page, $allowed_pages)) {

    // Invalid page requested, show an error or redirect to default page
    header('Location: /admin/login.php');
    exit();
}

$page = $_GET['page'] . '.php';
require_once($page);

?>
