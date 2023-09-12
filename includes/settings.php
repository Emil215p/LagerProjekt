<?php

spl_autoload_register(function ($classname) {
    require_once 'classes/' . $classname . '.php';
});

 $mysqli = UniversalConnect::doConnect();

ini_set('display_errors', 1);
$page = strtolower(isset($_GET['page'])) ? $_GET['page'] : 'start';
if (isset($_POST['page'])) {
    $page = strtolower((isset($_POST['page'])) ? $_POST['page'] : 'start');
}

$page = 'pages/' . $page . '.php';

$start_active = '';
$store_active = '';
$contact_active = '';
$about_active = "";
switch ($page) {
    case 'pages/start.php':
        $start_active = " style=\"color: #fff;background:#1e282c;\"";

        break;
    case 'pages/store.php':
        $store_active = " style=\"color: #fff;background:#1e282c;\"";

        break;
    case 'pages/cart.php':
        $contact_active = " style=\"color: #fff;background:#1e282c;\"";

        break;
    
        case 'pages/about.php':
        $contact_active = " style=\"color: #fff;background:#1e282c;\"";

        break;

    default:
        $start_active = " style=\"color: #fff;background:#1e282c;\"";
        break;
}