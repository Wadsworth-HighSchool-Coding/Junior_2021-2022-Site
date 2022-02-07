<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "example_1_20.student_information";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if ($conn == false) {
        die('connection failed:' . mysqli_connect_error);
    }

    $queryString = "SELECT * FROM user_accounts WHERE username = '" . $username . "' AND password = '" . $password . "' ORDER BY ID";
    echo $queryString;
    if ($query1 = $conn->query($queryString)) {
        echo "\nReturned rows are: " . $query1->num_rows;
        if ($query1->num_rows == 1) {
            header("location:student_information_table.php");
        } else {
            echo "Error: user not found";
        }
    }
}