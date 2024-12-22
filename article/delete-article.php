<?php
    require '../config-db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['articleId'])) {

    $articleId = test_input($_POST['articleId']);
    $sql = "DELETE FROM article WHERE articleId = '$articleId'";

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