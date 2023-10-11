<?php
ob_start();
session_start();
spl_autoload_register(function ($classname) {
    require_once '../classes/' . $classname . '.php';
});
$mysqli = UniversalConnect::doConnect();
            $msg = '';
            $csemail = $_POST['email'];
            $csname = $_POST['name'];
            $cslogin = $_POST['login'];
            if (isset($cslogin) && !empty($csname) 
               && !empty($csemail)) {
               if ($csname ==  "SELECT name FROM customers WHERE name LIKE '%".$csname."%'" && 
                  $csemail == "SELECT email FROM customers WHERE email LIKE '%".$csemail."%'") {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['name'] = $csname;
                  
                  echo 'You have entered valid name and email';
               }else {
                  $msg = 'Wrong name or email';
               }
            }
            header("location: ../index.php?page=start");