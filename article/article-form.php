<?php
require '../config-db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['title']) && isset($_POST['context'])) {
        $title = $_POST['title'];
        $context = $_POST['context'];

        $sql = "INSERT INTO article (title, context) VALUES ('$title', '$context')";

        if($conn->query($sql)){
            // echo "New record created successfully";
            header("location: article.php");
            exit();
        } else {
            echo "Error: " . $conn->connect_error;
        }
    }
}