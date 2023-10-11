<?php
$result = $mysqli->query("SELECT `id`, `manufacturer_id`, `name`, `price`, `quantity`, `image`, `code` FROM `products` ORDER BY id ASC");
$output = "";
if ($result->num_rows > 0) {
    while ($product = $result->fetch_object()) {
        $name = $product->name;
        $code = $product->code;
        $image = $product->image;
        $price = $product->price;
        $output .= "<div class=\"product-item\">";
        $output .= "<form method=\"post\" action=\"code/codecart.php?action=add\">";
        $output .= "<input type='hidden' name='code' value='$code'>";
        $output .= "<div class=\"product-image\"><img src=\"assets/images/$image\"></div>";
        $output .= "<div class=\"product-tile-footer\">";
        $output .= "<div class=\"product-title\">$name</div>";
        $output .= "<div class=\"product-price\">$price kr</div>";
        $output .= "<div class=\"cart-action\"><input type=\"text\" class=\"product-quantity\" name=\"quantity\" value=\"1\"";
        $output .= "size=\"2\" /><input type=\"submit\" value=\"Add to Cart\" class=\"btnAddAction\" /></div> </div> </form> </div>";
    }
    $result->free();
}
?>
<h1>Items</h1>
<p>Buy what you want.</p>

<div style="display: table;">
    <div id="product-grid">
        <div class="txt-heading">Products</div>
        <?php
        echo $output;
        ?>
    </div>
</div>