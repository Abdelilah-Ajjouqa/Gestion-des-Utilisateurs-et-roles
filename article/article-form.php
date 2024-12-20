<?php
require '../config-db.php';
if($_SERVER['REQUEST_METHOD'] == 'post'){
    if(isset($_POST['title']) && isset($_POST['content'])){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $sql = "INSERT INTO article (title, content) VALUES ('$title', '$content')";
        if($conn->query($sql)){
            header("location: ./article.php");
            exit();
        } else {
            echo "Error: " . $conn->connect_error;
        }
    }
}