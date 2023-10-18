<?php

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

echo $sql = "SELECT password FROM customers WHERE email = '$csemail'";
$result = $mysqli->query($sql);

$verify = false;

if ($result->num_rows > 0) {
    echo $result->num_rows;
    $obj_password = $result->fetch_object();
    $db_password = $obj_password->password;
    $verify = password_verify($cspassword, $db_password);
} else {
    echo "No results in the DB.";
}

if ($verify) {
    echo 'Password Verified!';
} else {
    echo 'Incorrect Password!';
}
//
//$sqlemail = "SELECT email FROM customers WHERE email LIKE '%" . $csemail . "%'";
//$mysqli->query($sqlemail);
//
//$resultemail = $mysqli->query($sqlemail);
//$rowemail = $resultemail->fetch_row();
//$emailquery = $rowemail[0];
//if (isset($cslogin) && !empty($cspassword) && !empty($x_email)) {
//    if ($cspassword == $passwordquery &&
//            $verify) {
//        $_SESSION['valid'] = true;
//        $_SESSION['timeout'] = time();
//        $_SESSION['name'] = $csname;
//
//        echo 'You have entered valid password and email';
//        header("location: ../index.php?page=start");
//    } else {
//        echo 'Wrong password or email';
//    }
//}
