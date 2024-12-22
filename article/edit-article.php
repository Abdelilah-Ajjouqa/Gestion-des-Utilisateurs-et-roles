<?php
    require '../config-db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title']) && isset($_POST['context'])) {

    $title = ($_POST['title']);
    $context = ($_POST['context']);
    $sql = "ALTER TABLE article";

    if (mysqli_query($conn, $sql)) {
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    header("Location: ./article.php");
    exit();
}

function test_input($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}