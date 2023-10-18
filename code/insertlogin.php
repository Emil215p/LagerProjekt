<?php
//echo password_hash('1234',  
//          PASSWORD_DEFAULT);
//die();
session_start();
spl_autoload_register(function ($classname) {
    require_once '../classes/' . $classname . '.php';
});
$mysqli = UniversalConnect::doConnect();
    $name = $_POST['name'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = date("Y-m-d");
    //prevent sql injections
    $name = $mysqli->real_escape_string($name);
    $address = $mysqli->real_escape_string($address);
    $zip = $mysqli->real_escape_string($zip);
    $city = $mysqli->real_escape_string($city);
    $phone = $mysqli->real_escape_string($phone);
    $email = $mysqli->real_escape_string($email);
    $date = $mysqli->real_escape_string($date);
    
  $plaintext_password = $_POST['password'];

  $hash = password_hash($plaintext_password,  
          PASSWORD_DEFAULT);

if (isset($_POST['submit'])) {
    //customers
    $password = $hash;
    $sql = "INSERT INTO customers (name,address,zip,city,phone,email,password) VALUES ('$name','$address','$zip','$city','$phone','$email','$password')";
    $mysqli->query($sql);
    $mysqli->close();
}
header("location: ../index.php?page=start");