<?php
require 'loginCheck.php';
?>

<?php
if (isset($_POST['ID']) && isset($_POST['comment'])) {
    $ID = $_POST['ID'];
    $comment = $_POST['comment'];


    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "php_test";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if ($conn == false) {
        die('connection failed:' . mysqli_connect_error);
    }

    $queryUpdate = "UPDATE comments SET comment='" . $comment . "' WHERE ID=" . $ID . "";

    if ($conn->query($queryUpdate) === TRUE) {
        header("Location:./comment_table.php?status=updated");
    } else {
        header("Location:./comment_table.php?status=failed");
    }
} else {
    header("Location:./comment_table.php?error=IDemepty");
}


?>