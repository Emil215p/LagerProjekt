<?php

//$navbar = "";
//$navbar .= "<div class=\"topnav\">";
//$navbar .= "<a $start_active class=\"navbar-brand\" href=\"index.php?page=start\">Start</a>";
//$navbar .= "<a $store_active class=\"navbar-brand\" href=\"index.php?page=store\">Store</a>";
//$navbar .= "<a $contact_active class=\"navbar-brand\" href=\"index.php?page=contact\">Contact</a>";
//$navbar .= "<a $about_active class=\"navbar-brand\" href=\"index.php?page=about\">About</a>";
//$navbar .= "<a id=\"right\" $cart_active class=\"navbar-brand\" href=\"index.php?page=cart\">Cart</a>";
//$navbar .= "</div>";
//echo $navbar;
// heredoc
$navbar = <<<OUT
 <div class="topnav">
 <a $start_active class="navbar-brand" href="index.php?page=start">Start</a>
 <a $store_active class="navbar-brand" href="index.php?page=store">Store</a>
 <a $contact_active class="navbar-brand" href="index.php?page=contact">Contact</a>
 <a $about_active class="navbar-brand" href="index.php?page=about">About</a>
 <a id="right" $cart_active class="navbar-brand" href="index.php?page=cart">Cart</a>
 </div>
OUT;
echo $navbar;

// The code below is broken now, will attempt to re-add later if there is time.
//Number in cart.
 
//    if (isset($_SESSION["cart_item"])) {
//$item_quantity = 0;
//foreach($_SESSION["cart_item"] as $item) {
//$item_quantity += intval($item["quantity"]);
//}
//echo "(" . $item_quantity . ") Cart";
//
//} else {
//echo "Cart";
//}