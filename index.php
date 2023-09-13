<?php
require 'includes/settings.php';
require "includes/header.php";
require "includes/navbar.php";
if (file_exists($page)) {
    include_once($page);
} else {
    include_once ('pages/404.php');
}
require "includes/footer.php";
