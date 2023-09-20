<?php
$mysqli = UniversalConnect::doConnect();
$action = isset($_GET["action"]) ? $_GET["action"] : '';
$posted_quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : '';
$get_code = isset($_GET["code"]) ? $_GET["code"] : '';
if (!empty($get_code)) {
    $get_code = $mysqli->real_escape_string($get_code);
}

if (!empty($action)) {
    switch ($action) {
        case "add":
            if (!empty($posted_quantity)) {
                $result = $mysqli->query("SELECT `id`, `manufacturer_id`, `name`, `price`, `quantity`, `image`, `code` FROM `products` "
                        . "WHERE code='" . $get_code . "'");

                $code = '';
                $name = '';
                $price = '';
                $image = '';
                if ($result->num_rows > 0) {
                    $item = $result->fetch_object();
                    $code = $item->code;
                    $name = $item->name;
                    $price = $item->price;
                    $image = $item->image;
                }
                $itemArray = array($code => array('name' => $name, 'code' => $code, 'quantity' => $posted_quantity, 'price' => $price, 'image' => $image));
                if (!empty($_SESSION["cart_item"])) {
                    if (!empty($code) && ($code == array_keys($_SESSION["cart_item"]))) {
                        foreach ($_SESSION["cart_item"] as $k => $v) {
                            if ($code == $k) {
                                if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                                    $_SESSION["cart_item"][$k]["quantity"] = 0;
                                }
                                $_SESSION["cart_item"][$k]["quantity"] += $posted_quantity;
                            }
                        }
                    } else {
                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                    }
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                }
            }
            break;
        case "remove":
            if (!empty($_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    if ($get_code == $k) {
                        unset($_SESSION["cart_item"][$k]);
                    }
                    if (empty($_SESSION["cart_item"])) {
                        unset($_SESSION["cart_item"]);
                    }
                }
            }
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            break;
    }
}

$result = $mysqli->query("SELECT `id`, `manufacturer_id`, `name`, `price`, `quantity`, `image`, `code` FROM `products` ORDER BY id ASC");
$output = "";
if ($result->num_rows > 0) {
    while ($product = $result->fetch_object()) {
        $name = $product->name;
        $code = $product->code;
        $image = $product->image;
        $price = $product->price;
        $output .= "<div class=\"product-item\">";
        $output .= "<form method=\"post\" action=\"index.php?page=store&action=add&code=$code\">";
        $output .= "<div class=\"product-image\"><img src=\"images/$image\"></div>";
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