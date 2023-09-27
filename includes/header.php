<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
        <title>Emils good store</title>
        <link rel="stylesheet" href="css/styleforgeneral.css" type="text/css"> 
        <?php
        if ($page == 'pages/store.php') {
            echo '<link href="css/storestyle.css" type="text/css" rel="stylesheet" />';
        }
        if ($page == 'pages/cart.php') {
            echo '<link href="css/storestyle.css" type="text/css" rel="stylesheet" />';
        }
        $start_active = '';
        $store_active = '';
        $contact_active = '';
        $about_active = '';
        $cart_active = '';
        switch ($page) {
            case 'pages/start.php':
                $start_active = " style=\"color: #fff;background:#1e282c;\"";
                break;
            case 'pages/store.php':
                $store_active = " style=\"color: #fff;background:#1e282c;\"";
                break;
            case 'pages/contact.php':
                $contact_active = " style=\"color: #fff;background:#1e282c;\"";
                break;
            case 'pages/about.php':
                $about_active = " style=\"color: #fff;background:#1e282c;\"";
                break;
            case 'pages/cart.php':
                $cart_active = " style=\"color: #fff;background:#1e282c;\"";
                break;
            default:
                $start_active = " style=\"color: #fff;background:#1e282c;\"";
                break;
        }
        ?>
    </head>
    <body>