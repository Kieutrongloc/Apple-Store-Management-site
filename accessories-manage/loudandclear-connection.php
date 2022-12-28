<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Authorization');
header('Access-Control-Allow-Methods: *');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manage_product";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
?>