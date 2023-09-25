<?php

$quantity = 0;
if (isset($_SESSION["cart_item"])) {
    $quantity = 0;
    $array_cart = $_SESSION["cart_item"];
    foreach ($array_cart as $key => $value) {
        $quantity += $value['quantity'];
    }
}
//array(1) { ["RyzGL"]=> array(5) { ["name"]=> string(16) "DUF Gaming 404FF" ["code"]=> string(5) "RyzGL" ["quantity"]=> string(1) "1"
// ["price"]=> string(7) "4000.00" ["image"]=> string(10) "DUF404.jpg" } } 

$navbar = <<<OUT
 <div class="topnav">
 <a $start_active class="navbar-brand" href="index.php?page=start">Start</a>
 <a $store_active class="navbar-brand" href="index.php?page=store">Store</a>
 <a $contact_active class="navbar-brand" href="index.php?page=contact">Contact</a>
 <a $about_active class="navbar-brand" href="index.php?page=about">About</a>
 <a id="right" $cart_active class="navbar-brand" href="index.php?page=cart">($quantity) Cart</a>
 </div>
OUT;
echo $navbar;
