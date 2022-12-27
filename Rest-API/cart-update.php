<?php
require "cart-connection.php";
$id = $_REQUEST["id"];
$quantity = $_REQUEST["quantity"];

$sql = "UPDATE cart SET quantity = '$quantity' WHERE id=".$id;

if ($conn->query($sql) === TRUE) {
  $cart = [];
    $sql = "SELECT * FROM cart";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $cart[] = $row;
        }
    } 
    echo json_encode($cart); die;
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

$conn->close();
?>