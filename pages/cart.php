<?php
if (isset($_SESSION["cart_item"])) {
    $total_quantity = 0;
    $total_price = 0;
}
?>
<div id="shopping-cart">
    <a id="btnEmpty" href="code/codecart.php?action=empty">Empty Cart</a>
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
if (isset($_SESSION["cart_item"])) {    
    foreach ($_SESSION["cart_item"] as $item) {
        $item_price = $item["quantity"] * $item["price"];
        ?>
                    <tr>
                        <td><img src="images/<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
                        <td><?php echo $item["code"]; ?></td>
                        <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                        <td  style="text-align:right;"><?php echo $item["price"] . "kr"; ?></td>
                        <td  style="text-align:right;"><?php echo number_format($item_price, 2) . "kr"; ?></td>
                        <td style="text-align:center;"><a href="code/codecart.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="images/icon-delete.png" alt="Remove Item" /></a></td>
                    </tr>
        <?php
        $total_quantity += $item["quantity"];
        $total_price += ($item["price"] * $item["quantity"]);
    }
    ?>

                <tr>
                    <td colspan="2" align="right">Total:</td>
                    <td align="right"><?php
                    //$_SESSION["cart_item"] = $total_quantity; ((THIS WAS THE IDIOT))
                    echo $total_quantity; ?></td>
                    <td align="right" colspan="2"><strong><?php echo number_format($total_price, 2) . "kr"; ?></strong></td>
                    <td></td>
                </tr>
                <button name="button" onclick="location.href='index.php?page=checkout'" type="button">Click Here</button> 
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