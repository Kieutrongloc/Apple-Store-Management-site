<?php
require "accessories-connection.php";
$id = $_REQUEST["id"];

// sql to delete a record
$sql = "DELETE FROM accessories WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  // echo "Record deleted successfully";
  // require "index.php";
  header("Location: http://localhost/www/manage_product/Apple-Store-Management-site/accessories-manage");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

$conn->close();

// require "index.php"
?>