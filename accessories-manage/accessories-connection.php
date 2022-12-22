<?php
header('Access-Control-Allow-Origin: *');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manage_product";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
?>