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
// prevent sql injection
$x_email = $mysqli->real_escape_string($x_email);
$x_password = $mysqli->real_escape_string($x_password);

$sql = "SELECT password, name FROM customers WHERE email = '$x_email'";
$result = $mysqli->query($sql);

$verify = false;
if ($result->num_rows > 0) {
    $obj_user = $result->fetch_object();
    $db_password = $obj_user->password;
    $verify = password_verify($x_password, $db_password);
    $name = $obj_user->name;
} else {
    echo "No results in the DB.";
}

if ($verify) {
    echo 'Password Verified!';
    $_SESSION['name'] = $name;
    $_SESSION['valid'] = true;
    $_SESSION['timeout'] = time();
    header('location: ../index.php?page=start');
} else {
    echo 'Incorrect Password!';
    header('location: ../index.php?page=loginornew');
}