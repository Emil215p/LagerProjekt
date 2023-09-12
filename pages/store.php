<?php
require_once "includes/header.php";
require_once "includes/navbar.php"
?>
<h1>Items</h1>
<p>Buy what you want.</p>
<?php
require_once("includes/dbcontroller.php");
$db_handle = new DBController();
if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["quantity"])) {
                $productByCode = $db_handle->runQuery("SELECT * FROM products WHERE code='" . $_GET["code"] . "'");
                $itemArray = array($productByCode[0]["code"] => array('name' => $productByCode[0]["name"], 'code' => $productByCode[0]["code"], 'quantity' => $_POST["quantity"], 'price' => $productByCode[0]["price"], 'image' => $productByCode[0]["image"]));

                if (!empty($_SESSION["cart_item"])) {
                    if (in_array($productByCode[0]["code"], array_keys($_SESSION["cart_item"]))) {
                        foreach ($_SESSION["cart_item"] as $k => $v) {
                            if ($productByCode[0]["code"] == $k) {
                                if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                                    $_SESSION["cart_item"][$k]["quantity"] = 0;
                                }
                                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
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
                    if ($_GET["code"] == $k)
                        unset($_SESSION["cart_item"][$k]);
                    if (empty($_SESSION["cart_item"]))
                        unset($_SESSION["cart_item"]);
                }
                }
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            break;
    }
}
?>
        <link href="css/storestyle.css" type="text/css" rel="stylesheet" />
        <div id="shopping-cart">
            <div class="txt-heading">Shopping Cart</div>

            <a id="btnEmpty" href="./index.php?page=store?action=empty">Empty Cart</a>
            <?php
            if (isset($_SESSION["cart_item"])) {
                $total_quantity = 0;
                $total_price = 0;
                ?>	
                <table class="tbl-cart" cellpadding="10" cellspacing="1">
                    <tbody>
                        <tr>
                            <th style="text-align:left;">Name</th>
                            <th style="text-align:left;">Code</th>
                            <th style="text-align:right;" width="5%">Quantity</th>
                            <th style="text-align:right;" width="10%">Unit Price</th>
                            <th style="text-align:right;" width="10%">Price</th>
                            <th style="text-align:center;" width="5%">Remove</th>
                        </tr>	
                        <?php
                        foreach ($_SESSION["cart_item"] as $item) {
                            $item_price = $item["quantity"] * $item["price"];
                            ?>
                            <tr>
                                <td><img src="../images/<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
                                <td><?php echo $item["code"]; ?></td>
                                <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                                <td  style="text-align:right;"><?php echo $item["price"] . "kr"; ?></td>
                                <td  style="text-align:right;"><?php echo number_format($item_price, 2) . "kr"; ?></td>
                                <td style="text-align:center;"><a href="./index.php?page=store?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="../images/icon-delete.png" alt="Remove Item" /></a></td>
                            </tr>
                            <?php
                            $total_quantity += $item["quantity"];
                            $total_price += ($item["price"] * $item["quantity"]);
                        }
                        ?>

                        <tr>
                            <td colspan="2" align="right">Total:</td>
                            <td align="right"><?php echo $total_quantity; ?></td>
                            <td align="right" colspan="2"><strong><?php echo number_format($total_price, 2) . "kr"; ?></strong></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>		
                <?php
            } else {
                ?>
                <div class="no-records">Your Cart is Empty</div>
                <?php
            }
            ?>
        </div>
<div style="display: table;">
        <div id="product-grid">
            <div class="txt-heading">Products</div>
            <?php
            $product_array = $db_handle->runQuery("SELECT * FROM products ORDER BY id ASC");
            if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
                    ?>
                    <div class="product-item">
                        <form method="post" action="./index.php?page=store?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                            <div class="product-image"><img src="../images/<?php echo $product_array[$key]["image"]; ?>"></div>
                            <div class="product-tile-footer">
                                <div class="product-title"><?php echo $product_array[$key]["name"]; ?></div>
                                <div class="product-price"><?php echo $product_array[$key]["price"] . "kr"; ?></div>
                                <div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                            </div>
                        </form>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        </div>  
        <div id="spacer"><p>This text should not be visible.</p></div>
            <div style="margin: 1px; text-aling: center">
        <p>This is underneath</p>
    </div>
  <?php require_once "includes/footer.php";