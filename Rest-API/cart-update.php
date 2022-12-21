<?php
require "cart-connection.php";
$name = "";
$image = "";
$quantity = "";
$price = 0;

// if(isset($_GET["id"])){
//   $id = $_GET["id"];
//   $sqlGetId = "SELECT * FROM accessories WHERE id = ".$id;
//   $result = mysqli_query($conn, $sqlGetId);
//   $row = mysqli_fetch_row($result);
//   $name = $row[1];
//   $image = $row[2];
//   $status = $row[3];
//   $price = $row[4];
// }

// Cho nay la update nhung no lai create new
// if(isset($_POST["accessories-submit"])){
  $name = $_POST['accessories-name'];
  $image = $_POST['accessories-image'];
  $status = $_POST['accessories-status'];
  $price = $_POST['accessories-price'];
  $sql = "UPDATE cart SET name = '$name', image = '$image', status = '$status', price = '$price' WHERE id=".$_POST["accessories-id"];
  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
// }

?>