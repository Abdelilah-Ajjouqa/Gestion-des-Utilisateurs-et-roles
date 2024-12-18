<?php
// session_start();
require '../config-db.php';
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['userName']) && isset($_POST['userGmail']) && isset($_POST['userPassword'])){
        $name = $_POST['userName'];
        $gmail = $_POST['userGmail'];
        $password = $_POST['userPassword'];
        $sql = "INSERT INTO user (userName, userGmail, userPassword) VALUES ('$name', '$gmail', '$password')";

        if ($conn->query($sql)) {
        } else {
            echo "Error: " . $conn->connect_error;
        }
        header("location: ./register-page.php");
        exit();
    }
}