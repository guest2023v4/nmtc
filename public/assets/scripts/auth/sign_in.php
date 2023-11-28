<?php 
require_once '../connect.php';

if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        if ($password==$data['password']) {
            session_start();
            $_SESSION['user_id'] = $data['id'];
            $_SESSION['user_name'] = $data['first_name'];
            $_SESSION['user_email'] = $data['email'];
            header("location: ../../../participantsList.php");
        } else {
            header("location: ../../../sign-in.html?error=wrong");
        }
    } else {
        header("location: ../../../sign-in.html?error=wrong");
    }
    $conn->close();
}