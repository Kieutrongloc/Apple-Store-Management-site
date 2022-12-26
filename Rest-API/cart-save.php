<?php
require 'cart-connection.php';
$data = json_decode(file_get_contents('php://input'), true);

$id = $data['id'];
$name = $data['name'];
$price = floatval($data['price']);
$image = $data['image'];

$sql = "INSERT INTO cart (name, image, quantity, price, product_id)
  VALUES ('$name', '$image', 1, $price, $id)";
  
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
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>