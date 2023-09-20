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
    while ($cart = $result->fetch_object()) {
        $name = $cart->name;
        $code = $cart->code;
        $image = $cart->image;
        $price = $cart->price;
        $item_price = $cart->item_price;
        $total_quantity = $cart->total_quantity;
        $total_price = $cart->total_price;
        $output .= "<div id=\"shopping-cart\">";
        $output .= "<div class=\"txt-heading\">Shopping Cart</div>";
        $output .= "<a id=\"btnEmpty\" href=\"index.php?page=store&action=empty\">Empty Cart</a>";
        //<?php
        //if (isset($_SESSION["cart_item"])) {
        //$total_quantity = 0;
        //$total_price = 0;
        //}
        //? >
        $output .= "<table class=\"tbl-cart\" cellpadding=\"10\" cellspacing=\"1\">";
        $output .= "<tbody>";
        $output .= "<tr>";
        $output .= "<th style=\"text-align:left;\">Name</th>";
        $output .= "<th style=\"text-align:left;\">Code</th>";
        $output .= "<th style=\"text-align:right;\" width=\"5%\">Quantity</th>";
        $output .= "<th style=\"text-align:right;\" width=\"10%\">Unit Price</th>";
        $output .= "<th style=\"text-align:right;\" width=\"10%\">Price</th>";
        $output .= "<th style=\"text-align:center;\" width=\"5%\">Remove</th>";
        $output .= "</tr>";
        //<?php 
        //foreach ($_SESSION["cart_item"] as $item) {
        //$item_price = $item["quantity"] * $item["price"];
        // ? >
        $output .= "<tr>";
        $output .= "<td><img src=\"images/$image\" class=\"cart-item-image\" />$name</td>";
        $output .= "<td>$code</td>";
        $output .= "<td style=\"text-align:right;\">$quantity</td>";
        $output .= "<td style=\"text-align:right;\">$price kr</td>";
        $output .= "<td style=\"text-align:right;\">$item_price kr</td>";
        $output .= "<td style=\"text-align:center;\"><a href=\"index.php?page=cart&action=remove&code=$code\" class=\"btnRemoveAction\">"
                . "<img src=\"images/icon-delete.png\" alt=\"Remove Item\" /></a></td>";
        $output .= "</tr>";
        //<?php
        //$total_quantity += $item["quantity"];
        //$total_price += ($item["price"] * $item["quantity"]);
        //}
        //? >
        $output .= "<tr>";
        $output .= "<td colspan=\"2\" align=\"right\">Total:</td>";
        $output .= "<td align=\"right\">$total_quantity</td>";
        $output .= "<td align=\"right\" colspan=\"2\"><strong>$total_price</strong></td>";
        $output .= "<td></td>";
        $output .= "</tr>";
        $output .= "</tbody>";
        $output .= "</table>";
        //<?php
        //} else {
        //? >
        $output .= "<div class=\"no-records\">Your Cart is Empty</div>";
        //<?php
        //}
        //? >
        $output .= "</div>";
    }
    $result->free();
}
?>
<h1>Cart</h1>
<div style="display: table;">
    <div id="product-grid">
        <div class="txt-heading">Products</div>
        <?php
        echo $output;
        ?>
    </div>
</div>