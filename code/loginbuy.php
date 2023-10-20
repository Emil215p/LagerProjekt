<?php

//ini_set('display_errors', 1);
//echo password_hash('1234', PASSWORD_DEFAULT);
session_start();
spl_autoload_register(function ($classname) {
    require_once '../classes/' . $classname . '.php';
});
$mysqli = UniversalConnect::doConnect();

$x_email = $_POST['email'];
$x_password = $_POST['password'];
$date = date("Y-m-d");
// prevent sql injection
$x_email = $mysqli->real_escape_string($x_email);
$x_password = $mysqli->real_escape_string($x_password);
$date = $mysqli->real_escape_string($date);

$sql = "SELECT id ,password, name FROM customers WHERE email = '$x_email'";
$result = $mysqli->query($sql);

$verify = false;
if ($result->num_rows > 0) {
    $obj_user = $result->fetch_object();
    $db_password = $obj_user->password;
    $db_customerid = $obj_user->id;
    $verify = password_verify($x_password, $db_password);
    $name = $obj_user->name;
} else {
    echo "No results in the DB.";
}

if ($verify) {
    echo 'Password Verified!';
    $_SESSION['user_id'] = $id;
    $_SESSION['name'] = $name;
    $_SESSION['valid'] = true;
    $_SESSION['timeout'] = time();
} else {
    echo 'Incorrect Password!';
    header('location: ../index.php?page=loginornew');
}

    //orders
    
    $new_customer_id = $obj_user->id;
    echo $new_customer_id;
    if (!empty($date))
    {
        echo $date;
                
    }
    else {
        echo "not date";
    }
    
    $sql = "INSERT INTO orders (customer_id,date) VALUES ('$new_customer_id','$date')";
    $mysqli->query($sql);
    //orderslines
    $new_order_id = $mysqli->insert_id;
    // creates an array with all the key names
    $arr_ids = array_keys($_SESSION["cart_item"]);
    foreach ($arr_ids as $code) {
        $cart_content = $_SESSION["cart_item"][$code];
        $product_quantity = $cart_content["quantity"];
        $product_id = $cart_content['id'];
        $sql = "INSERT INTO orderslines (product_id,order_id,amount) VALUES ('$product_id','$new_order_id','$product_quantity')";
        $mysqli->query($sql);
    }
    $mysqli->close();

unset($_SESSION["cart_item"]);
header("location: ../index.php?page=store");
