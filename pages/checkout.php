<?php
 
echo '<pre>'; var_dump($_SESSION["cart_item"]); echo '</pre>';
?>
<form id="checkoutform" action="code/insert.php" method="post">
    <div id="lasagna">
    <label>Name:</label><br>
    <input class='input-width' type="text" name="name"><br>
    </div>
    <div id="lasagna">
    <label>Address:</label><br>
    <input class='input-width' type="text" name="address"><br>
    </div>
    <div id="lasagna">
    <label>Zip:</label><br>
    <input class='input-width' type="text" name="zip"><br>
    </div>
    <div id="lasagna">
    <label>City:</label><br>
    <input class='input-width' type="text" name="city"><br>
    </div>
    <div id="lasagna">
    <label>Phone:</label><br>
    <input class='input-width' type="text" name="phone"><br>
    </div>
    <div id="lasagna">
    <label>Email:</label><br>
    <input class='input-width' type="text" name="email"><br>
    </div>
    <input type="submit" class="btn btn-primary" name="submit" value="Indsend">
</form>