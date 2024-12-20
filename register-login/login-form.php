<?php
session_start();
require '../config-db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['email']) && isset($_POST['password'])){
        $gmail = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM user WHERE userGmail = '$gmail'";
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();

        if (password_verify($password , $user['userPassword'])) {
        $_SESSION ['email'] = $gmail;
        $_SESSION ['password'] = $password;
        header("location: ../aticle/article.php");
        exit();
        } else {
            echo 'Invalid password.';
        }

        if ($conn->query($sql)) {
        } else {
            echo "Error: " . $conn->connect_error;
        }
    }
}