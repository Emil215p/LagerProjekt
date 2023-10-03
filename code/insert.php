<?php
spl_autoload_register(function ($classname) {
    require_once '../classes/' . $classname . '.php';
});
$mysqli = UniversalConnect::doConnect();
if(isset($_POST['submit']))
{    
     $name = $_POST['name'];
     $address = $_POST['address'];
     $zip = $_POST['zip'];
     $city = $_POST['city'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $sql = "INSERT INTO customers (name,address,zip,city,phone,email) VALUES ('$name','$address','$zip','$city','$phone','$email')";
     mysqli_query($mysqli, $sql);
     mysqli_close($mysqli);
}
header("location: ../index.php?page=store");