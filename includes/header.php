<?php
session_start();
spl_autoload_register(function ($class_name) {
    include classes/$class_name . '.php';
});
$mysqli = UniversalConnect::doConnect();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Emils good store</title>
        <link rel="stylesheet" href="css/styleforgeneral.css" type="text/css"> 
        <?php 
            if ($page == 'pages/store.php') {
                echo '<link href="css/storestyle.css" type="text/css" rel="stylesheet" />';
            }
        ?>
    </head>
    <body>