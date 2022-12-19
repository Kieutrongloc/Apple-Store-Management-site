<?php

require 'accessories-connection.php';
//Only run the action if click on Submit button
if(isset($_POST['accessories-submit'])) {

  $name = $_POST['accessories-name'];
  $image = $_POST['accessories-image'];
  $status = $_POST['accessories-status'];
  $price = $_POST['accessories-price'];
  
  $sql = "INSERT INTO accessories (name, image, status, price)
  VALUES ('$name', '$image', '$status', '$price')";
  
  if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/www/manage_product/Apple-Store-Management-site/accessories-manage");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
}
?>
<!-- <br>
<a style="color:black;" href="http://localhost/www/manage_product/Apple-Store-Management-site/">Click here to go back to Product manager</a> -->