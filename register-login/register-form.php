<?php
require '../config-db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
        $name = $_POST['name'];
        $gmail = $_POST['email'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO user (userName, userGmail, userPassword) VALUES ('$name', '$gmail', '$hashed_password')";

        if ($conn->query($sql)) {
        } else {
            echo "Error: " . $conn->connect_error;
        }
        header('location: ../home.php');
        exit();
    }
}