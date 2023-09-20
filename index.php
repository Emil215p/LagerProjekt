<?php
require 'includes/settings.php';
require "includes/header.php";
echo "<div class=\"content\">";
require "includes/navbar.php";
if (file_exists($page)) {
    include_once($page);
} else {
    include_once ('pages/404.php');
}
echo "</div>";
require "includes/footer.php";