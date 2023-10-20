<?php

$id = $_SESSION['user_id'];
$name = $_SESSION['name'];

echo "<h1>Welcome <em>" . $name . "</em> Here you can see your orders:</h1>";

$sql = "SELECT `id`, `customer_id`, `date` FROM orders WHERE customer_id = $id";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // user has orders
    $output = '';
    while ($order = $result->fetch_object()){
       $id = $order->id;
       $date = $order->date;
       $output .= "ID: $id, DATE: $date <br>";
    }
    $result->free();
} else  {
    // user has not orders
    $output = 'User has no orders.';
}
echo $output;