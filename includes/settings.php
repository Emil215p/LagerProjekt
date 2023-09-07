<?php

spl_autoload_register(function ($classname) {
    require_once 'classes/' . $classname . '.php';
});

// $mysqli = UniversalConnect::doConnect();

//ini_set('display_errors', 1);
$page = strtolower(isset($_GET['page'])) ? $_GET['page'] : 'home';
if (isset($_POST['page'])) {
    $page = strtolower((isset($_POST['page'])) ? $_POST['page'] : 'home');
}

$page = 'pages/' . $page . '.php';

$home_active = '';
$projects_active = '';
$contact_active = '';
switch ($page) {
    case 'pages/home.php':
        $home_active = " style=\"color: #fff;background:#1e282c;\"";

        break;
    case 'pages/projects.php':
        $home_active = '';
        $projects_active = " style=\"color: #fff;background:#1e282c;\"";

        break;
    case 'pages/contact.php':
        $contact_active = " style=\"color: #fff;background:#1e282c;\"";

        break;

    default:
        $home_active = " style=\"color: #fff;background:#1e282c;\"";
        break;
}