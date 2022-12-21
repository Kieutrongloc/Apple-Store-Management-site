<?php
require "cart-connection.php";
$id = $_REQUEST["id"];

// sql to delete a record
$sql = "DELETE FROM cart WHERE id=2";

if ($conn->query($sql) === TRUE) {
  // echo "Record deleted successfully";
  // header("Location: http://localhost/www/manage_product/Apple-Store-Management-site/accessories-manage");
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

$conn->close();

?>

<br>