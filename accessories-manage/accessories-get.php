<?php
require 'accessories-connection.php';
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM accessories";
$result = $conn->query($sql);
$accessories = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $accessories[] = $row;
  }
  echo json_encode($accessories); die;
} else {
  echo "0 results";
}
$conn->close();
?>