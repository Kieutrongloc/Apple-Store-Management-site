<?php

require 'loudandclear-connection.php';
//Only run the action if click on Submit button
if(isset($_POST['loudandclear-submit'])) {

  $name = $_POST['loudandclear-name'];
  $image = $_POST['loudandclear-image'];
  $status = $_POST['loudandclear-status'];
  $price = $_POST['loudandclear-price'];
  
  $sql = "INSERT INTO loudandclear (name, image, status, price)
  VALUES ('$name', '$image', '$status', '$price')";
  
  if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/www/manage_product/Apple-Store-Management-site/accessories-manage");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}
?>