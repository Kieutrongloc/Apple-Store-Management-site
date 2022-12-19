<?php
require "accessories-connection.php";
$id = $_REQUEST["id"];

// sql to delete a record
$sql = "DELETE FROM accessories WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

$conn->close();

// require "index.php"
?>

<br>
<a style="color:black;" href="http://localhost/www/manage_product/Apple-Store-Management-site/accessories-manage">Click here to go back to Product manager</a>