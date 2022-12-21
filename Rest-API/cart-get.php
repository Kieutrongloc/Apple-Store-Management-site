<?php
require 'cart-connection.php';

$sql = "SELECT * FROM cart";
// $sql = "SELECT name,image, status, price FROM accessories ORDER BY id";
$result = $conn->query($sql);

// $accessories = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "name: " . $row["name"]. " - image: " . $row["image"]. " " . $row["last_name"]. "<br>";
    $cart[] = $row;
  }
  echo json_encode($cart); die;
} else {
  echo "0 results";
}
$conn->close();
?>