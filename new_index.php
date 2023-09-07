<?php
require_once 'includes/header.php';

//echo '-' . $page . '-' ;

if (file_exists($page)) {
    include_once($page);
} else
{
    include_once ('pages/404.php');
}
require_once 'includes/footer.php';