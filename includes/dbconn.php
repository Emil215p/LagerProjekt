<?php

$servername = "localhost";
$username = "emko01_skp-dp_sde_dk";
$password = "pqk5235q";
$dbname = "emko01_skp_dp_sde_dk";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}