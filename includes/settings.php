<?php
session_start();
//error_reporting(0);
spl_autoload_register(function ($classname) {
    require_once 'classes/' . $classname . '.php';
});
 $mysqli = UniversalConnect::doConnect();
//ini_set('display_errors', 1);
$page = strtolower(isset($_GET['page'])) ? $_GET['page'] : 'start';
if (isset($_POST['page'])) {
    $page = strtolower((isset($_POST['page'])) ? $_POST['page'] : 'start');
}
$page = 'pages/' . $page . '.php';