<?php
require 'cart-connection.php';

$sql = "SELECT * FROM cart";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $cart[] = $row;
  }
  echo json_encode($cart); die;
} else {
  echo "0 results";
}
$conn->close();
?>