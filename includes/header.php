<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"/>
        <title>Emils good store</title>
        <link rel="stylesheet" href="assets/css/styleforgeneral.css" type="text/css"> 
        <?php
        if ($page == 'pages/store.php') {
            echo '<link href="assets/css/storestyle.css" type="text/css" rel="stylesheet" />';
        }
        if ($page == 'pages/cart.php') {
            echo '<link href="assets/css/storestyle.css" type="text/css" rel="stylesheet" />';
        }
        $start_active = '';
        $store_active = '';
        $contact_active = '';
        $about_active = '';
        $cart_active = '';
        $loginornew_active = '';
        $loginname_active = '';
        $logout_active = '';
        $accountpage_active = '';
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
            case 'pages/loginornew.php':
                $loginornew_active = " style=\"color: #fff;background:#1e282c;\"";
                break;
            case 'yea':
                $loginname_active = " style=\"color: #fff;background:#1e282c;\"";
                break;
            case 'code/logout.php':
                $logout_active = " style=\"color: #fff;background:#1e282c;\"";
                break;
            case 'page/account.php':
                $accountpage_active = " style=\"color: #fff;background:#1e282c;\"";
                break;
            default:
                $start_active = " style=\"color: #fff;background:#1e282c;\"";
                break;
        }
        ?>
    </head>
    <body>