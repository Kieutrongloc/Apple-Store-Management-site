<?php
require 'user-account-connection.php';
$data = json_decode(file_get_contents('php://input'), true);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // enable exceptions
$email = $data['email'];
$password = $data['password'];

// $log_username = $_POST['username'];
// $log_password = $_POST['password'];

$sql = "SELECT email, password FROM user_account WHERE email=email";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    if (password_verify($log_password, $row['password'])) {
        $message = "ok";
        // header must be called before any other output
        header("Location: google.com");
        exit();
    }
}
$message = "No";
// header must be called before any other output
header("Location: google.com");
?>
