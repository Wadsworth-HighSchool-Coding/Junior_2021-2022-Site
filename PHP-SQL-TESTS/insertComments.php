<?php
require 'loginCheck.php';
?>

<?php
$comment = $_POST['comment'];


if (empty($comment)) {
    header("location: ./insertCommentsForm.php?error=emptyInput");
} else {

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "php_test";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


    if ($conn == false) {
        die('connection failed:' . mysqli_connect_error);
    }


    $queryString = "INSERT INTO comments (username,comment) 
    VALUES ('" . $_SESSION["USERNAME"] . "','" . $comment . "')";


    if ($conn->query($queryString) === true) {
        header("location: ./comment_table.php");
    } else {
        echo "Error:" . $queryString . "<br>" . $conn->error;
    }

    $conn->close();
}
?>