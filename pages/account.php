<?php
$sessionname = $_SESSION['name'];
$sql = "SELECT name from customers WHERE  LIKE '%".$sessionname."%'";
$mysqli->query($sql);