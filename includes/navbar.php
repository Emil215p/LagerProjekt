<div class="topnav">
    <a <?php echo $start_active; ?> class="navbar-brand" href="index.php?page=start">Start</a>
    <a <?php echo $store_active; ?> class="navbar-brand" href="index.php?page=store">Store</a>
    <a <?php echo $contact_active; ?> class="navbar-brand" href="index.php?page=contact">Contact</a>
    <a <?php echo $about_active; ?> class="navbar-brand" href="index.php?page=about">About</a>
    <a id="right" <?php echo $cart_active; ?> class="navbar-brand" href="index.php?page=cart"><?php
    if (isset($_SESSION["cart_item"])) {
$item_quantity = 0;
foreach($_SESSION["cart_item"] as $item) {
$item_quantity += intval($item["quantity"]);
}
echo "(" . $item_quantity . ") Cart";

} else {
echo "Cart";
}
        ?></a>
</div>