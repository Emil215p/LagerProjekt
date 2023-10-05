<?php

session_start();
spl_autoload_register(function ($classname) {
    require_once '../classes/' . $classname . '.php';
});
$mysqli = UniversalConnect::doConnect();
if (isset($_POST['submit'])) {
    //customers
    $name = $_POST['name'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = date("Y-m-d");
    $sql = "INSERT INTO customers (name,address,zip,city,phone,email) VALUES ('$name','$address','$zip','$city','$phone','$email')";
    $mysqli->query($sql);

    //orders
    $new_customer_id = $mysqli->insert_id;
    $sql = "INSERT INTO orders (customer_id, date) VALUES ('$new_customer_id', '$date')";
    $mysqli->query($sql);
    $mysqli->close();

    //orderslines
    $new_order_id = $mysli->insert_id;

    // creates an array with all the key names
    $arr_ids = array_keys($_SESSION["cart_item"]);

    foreach ($arr_ids as $id) {
        // get's all the content of the id
        $cart_content = $_SESSION["cart_item"][$id];
        // how to select feilds
        $product_name = $content["name"];
        $product_quantity = $content["quantity"];
        $product_price = $content["price"];
        $product_image = $content["image"];
    }
}
header("location: ../index.php?page=store");