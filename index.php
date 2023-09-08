<?php
require_once 'includes/settings.php';
require_once "includes/header.php";
require_once "includes/navbar.php";
if (file_exists($page)) {
    include_once($page);
} else {
    include_once ('pages/404.php');
}
require_once "includes/footer.php";
