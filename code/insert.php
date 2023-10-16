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
    $password = $_POST['password'];
    $date = date("Y-m-d");
    $sql = "INSERT INTO customers (name,address,zip,city,phone,email,password) VALUES ('$name','$address','$zip','$city','$phone','$email','$password')";
    $mysqli->query($sql);

    //orders
    $new_customer_id = $mysqli->insert_id;
    $sql = "INSERT INTO orders (customer_id, date) VALUES ('$new_customer_id', '$date')";
    $mysqli->query($sql);

    //orderslines
    $new_order_id = $mysqli->insert_id;
    // creates an array with all the key names
    $arr_ids = array_keys($_SESSION["cart_item"]);
    foreach ($arr_ids as $code) {
        // get's all the content of the id
        $cart_content = $_SESSION["cart_item"][$code];
        // how to select feilds
//        $product_name = $content["name"];
        $product_quantity = $cart_content["quantity"];
        $product_id = $cart_content['id'];
        $sql = "INSERT INTO orderslines (product_id, order_id, amount) VALUES ('$product_id','$new_order_id','$product_quantity')";
        
        $mysqli->query($sql);
    }
    $mysqli->close();
}
unset($_SESSION["cart_item"]);
header("location: ../index.php?page=store");