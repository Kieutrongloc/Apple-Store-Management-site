<?php
require 'user-account-connection.php';
// $data = json_decode(file_get_contents('php://input'), true);
// if the input-name=submit clicked, then take the action
if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $country = $_POST['country'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $verify_with = $_POST['verify_with'];
    $announcements = $_POST['announcements'];
    $ads = $_POST['ads'];
}

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