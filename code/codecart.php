<?php
session_start();
spl_autoload_register(function ($classname) {
    require_once '../classes/' . $classname . '.php';
});
$page = "store";
$mysqli = UniversalConnect::doConnect();
$action = isset($_GET["action"]) ? $_GET["action"] : '';
$posted_quantity = isset($_POST["quantity"]) ? $_POST["quantity"] : '';
$get_code = isset($_GET["code"]) ? $_GET["code"] : '';
if (empty($get_code)) {
    $get_code = isset($_POST["code"]) ? $_POST["code"] : '';
}
if (!empty($get_code)) {
    $get_code = $mysqli->real_escape_string($get_code);
}

if (!empty($action)) {
    switch ($action) {
        case "add":
            if (!empty($posted_quantity)) {
                $result = $mysqli->query("SELECT `id`, `manufacturer_id`, `name`, `price`, `quantity`, `image`, `code` FROM `products` "
                        . "WHERE code='" . $get_code . "'");

                //$code = '';
                $name = '';
                $price = '';
                $image = '';
                if ($result->num_rows > 0) {
                    $item = $result->fetch_object();
                    //$code = $item->code;
                    $name = $item->name;
                    $price = $item->price;
                    $image = $item->image;
                }
                $itemArray = array($get_code => array('name' => $name, 'code' => $get_code, 'quantity' => $posted_quantity, 'price' => $price, 'image' => $image));
                if (!empty($_SESSION["cart_item"])) {
                    if (!empty($get_code) && ($get_code == array_keys($_SESSION["cart_item"]))) {
                        foreach ($_SESSION["cart_item"] as $k => $v) {
                            if ($get_code == $k) {
                                if (empty($_SESSION["cart_item"][$k]["quantity"])) {
                                    $_SESSION["cart_item"][$k]["quantity"] = 0;
                                }
                                $_SESSION["cart_item"][$k]["quantity"] += $posted_quantity;
                            }
                        }
                    } else {
                        $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
                    }
                } else {
                    $_SESSION["cart_item"] = $itemArray;
                }
            }
            break;
        case "remove":
            if (!empty($_SESSION["cart_item"])) {
                foreach ($_SESSION["cart_item"] as $k => $v) {
                    if ($get_code == $k) {
                        unset($_SESSION["cart_item"][$k]);
                    }
                    if (empty($_SESSION["cart_item"])) {
                        unset($_SESSION["cart_item"]);
                    }
                    $page = "cart";
                }
            }
            break;
        case "empty":
            unset($_SESSION["cart_item"]);
            break;
    }
}
header("location: ../index.php?page=$page");    