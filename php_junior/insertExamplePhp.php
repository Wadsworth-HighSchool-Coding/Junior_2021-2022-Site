<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "example_1_20.student_information";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn == false) {
    die('connection failed:' . mysqli_connect_error);
}

$fName = $_POST['first_name'];
$lName = $_POST['last_name'];
$age = $_POST['age'];
$hSchool = $_POST['home_school'];

$queryString = "INSERT INTO columns (first_name,last_name,age,home_school) 
VALUES ('" . $fName . "','" . $lName . "','" . $age . "','" . $hSchool . "')";


if ($conn->query($queryString) === true) {
    echo "new Record created";
} else {
    echo "Error:" . $queryString . "<br>" . $conn->error;
}

$conn->close();
?>