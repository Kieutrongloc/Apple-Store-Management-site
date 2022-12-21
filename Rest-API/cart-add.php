<?php

require 'cart-connection.php';
//Only run the action if click on Submit button
// if(isset($_POST['accessories-submit'])) {

  // $name = $_POST['accessories-name'];
  // $image = $_POST['accessories-image'];
  // $quantity = $_POST['accessories-status'];
  // $price = $_POST['accessories-price'];
  
  $sql = "INSERT INTO cart (name, image, quantity, price)
  VALUES ('$name', '$image', '$quantity', '$price')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
// }
?>