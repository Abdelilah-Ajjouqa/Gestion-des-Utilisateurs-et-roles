<?php
session_start();
require '../config-db.php';

$result = $conn->query("SELECT * FROM article");

$userNameResult = $conn->query("SELECT userName FROM user WHERE userGmail = '{$_SESSION['email']}'");
if ($userNameResult && $userNameResult->num_rows > 0) {
    $userNameRow = $userNameResult->fetch_assoc();
    $userName = $userNameRow['userName'];
} else {
    $userName = 'Guest';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title']) && isset($_POST['context']) && !isset($_POST['id'])) {
    $title = $_POST['title'];
    $context = $_POST['context'];
    $sql = "INSERT INTO article (title, context) VALUES ('$title', '$context')";
    if ($conn->query($sql) === TRUE) {
        header("Location: article.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['title']) && isset($_POST['context'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $context = $_POST['context'];
    $sql = "UPDATE article SET title = '$title', context = '$context' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        header("Location: article.php");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
