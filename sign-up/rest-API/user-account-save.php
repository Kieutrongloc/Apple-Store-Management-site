<?php
require 'user-account-connection.php';
$data = json_decode(file_get_contents('php://input'), true);

$id = $data['id'];
$name = $data['name'];
$price = floatval($data['price']);
$image = $data['image'];

$sql = "INSERT INTO user_account (name, image, quantity, price, product_id)
  VALUES ('$name', '$image', 1, $price, $id)";
  
if ($conn->query($sql) === TRUE) {
    $user_account = [];
    $sql = "SELECT * FROM user_account";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $user_account[] = $row;
        }
    } 
    echo json_encode($user_account); die;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>