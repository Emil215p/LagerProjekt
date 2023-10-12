<?php
ob_start();
session_start();
spl_autoload_register(function ($classname) {
    require_once '../classes/' . $classname . '.php';
});
$mysqli = UniversalConnect::doConnect();
            $csemail = $_POST['email'];
            $cspassword = $_POST['password'];
            $cslogin = $_POST['login'];
            $csname = $_POST['name'];
            $sqlpassword = "SELECT password FROM customers WHERE password LIKE '%".$cspassword."%'";
            $sqlemail = "SELECT email FROM customers WHERE email LIKE '%".$csemail."%'";
            $mysqli->query($sqlpassword);
            $mysqli->query($sqlemail);
            
            $resultpassword = $mysqli->query($sqlpassword);
            $rowpassword = mysqli_fetch_row($resultpassword);
            $passwordquery = $rowpassword[0];
            
            $resultemail = $mysqli->query($sqlemail);
            $rowemail = mysqli_fetch_row($resultemail);
            $emailquery = $rowemail[0];
            if (isset($cslogin) && !empty($cspassword) 
               && !empty($csemail)) {
               if ($cspassword ==  $passwordquery && 
                  $csemail == $emailquery) {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['name'] = $csname;
                  
                  echo 'You have entered valid password and email';
                  header("location: ../index.php?page=start");
               }else {
                  echo 'Wrong password or email';
               }
            }
            //header("location: ../index.php?page=start");