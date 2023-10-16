<?php

$quantity = 0;
$sessionname = $_SESSION['name'];
if (isset($_SESSION["cart_item"])) {
    $quantity = 0;
    $array_cart = $_SESSION["cart_item"];
    If(Is_array($array_cart)) {
             foreach ($array_cart as $key => $value) {
        $quantity += $value['quantity'];
    }
    }
}

if(empty($sessionname)) {
    $navbar = <<<OUT
 <div class="topnav">
 <a $start_active class="navbar-brand" href="index.php?page=start">Start</a>
 <a $store_active class="navbar-brand" href="index.php?page=store">Store</a>
 <a $contact_active class="navbar-brand" href="index.php?page=contact">Contact</a>
 <a $about_active class="navbar-brand" href="index.php?page=about">About</a>
 <a id="right" $cart_active class="navbar-brand" href="index.php?page=cart">($quantity) Cart</a>
 <a id="right" $loginornew_active class="navbar-brand" href="index.php?page=loginornew">Login/New</a>
 </div>
OUT;
echo $navbar;
} else {
$navbar = <<<OUT
 <div class="topnav">
 <a $start_active class="navbar-brand" href="index.php?page=start">Start</a>
 <a $store_active class="navbar-brand" href="index.php?page=store">Store</a>
 <a $contact_active class="navbar-brand" href="index.php?page=contact">Contact</a>
 <a $about_active class="navbar-brand" href="index.php?page=about">About</a>
 <a id="right" $cart_active class="navbar-brand" href="index.php?page=cart">($quantity) Cart</a>
 <a id="right" $accountpage_active class="navbar-brand" href="index.php?page=account">Account</a>
 <a id="right" $logout_active class="navbar-brand" href="code/logout.php">Logout</a>
 <a $loginname_active id="right" class="navbar-brand">You are currently logged in as ($sessionname)</a>
 </div>
OUT;
echo $navbar;
}