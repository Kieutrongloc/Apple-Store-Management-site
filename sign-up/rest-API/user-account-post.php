<?php
require 'user-account-connection.php';
$data = json_decode(file_get_contents('php://input'), true);

    $first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $country = $data['country'];
    $birthday = $data['birthday'];
    $email = $data['email'];
    $password = $data['password'];
    $phone = $data['phone'];
    $verify_with = $data['verify_with'];
    $announcements = $data['announcements'];
    $ads = $data['ads'];

$sql = "INSERT INTO user_account (first_name, last_name, country, birthday, email, password, phone, verify_with, announcements, ads)
  VALUES ('$first_name', '$last_name', '$country', '$birthday', '$email',  '$password', '$phone', '$verify_with', '$announcements', '$ads')";
  
if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
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