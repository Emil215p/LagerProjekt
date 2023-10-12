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
    $sql = "INSERT INTO customers (name,address,zip,city,phone,email, password) VALUES ('$name','$address','$zip','$city','$phone','$email','$password')";
    $mysqli->query($sql);
    $mysqli->close();
}
unset($_SESSION["cart_item"]);
header("location: ../index.php?page=start");