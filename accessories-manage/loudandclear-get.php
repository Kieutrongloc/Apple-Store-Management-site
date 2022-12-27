<?php
require 'loudandclear-connection.php';
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM loudandclear";
$result = $conn->query($sql);
$loudandclear = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $loudandclear[] = $row;
  }
  echo json_encode($loudandclear); die;
} else {
  echo "0 results";
}
$conn->close();
?>