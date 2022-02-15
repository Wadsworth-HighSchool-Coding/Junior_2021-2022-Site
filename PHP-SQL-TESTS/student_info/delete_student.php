<?php
require 'loginCheck.php';
?>

<?php

if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];


    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "example_1_20.student_information";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if ($conn == false) {
        die('connection failed:' . mysqli_connect_error);
    }

    $queryUpdate = "DELETE FROM columns WHERE studentID =" . $ID;

    if ($conn->query($queryUpdate) === TRUE) {
        header("Location:./student_information_table.php?status=deleted");
    } else {
        header("Location:./student_information_table.php?status=failed");
    }
} else {
    header("Location:./student_information_table.php?error=IDemepty");
}