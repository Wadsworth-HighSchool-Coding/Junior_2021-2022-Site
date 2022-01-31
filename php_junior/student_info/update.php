<?php
if (isset($_POST['ID']) || isset($_POST['first_name']) || isset($_POST['last_name']) || isset($_POST['age']) || isset($_POST['home_school'])) {
    $ID = $_POST['ID'];
    $fName = $_POST['first_name'];
    $lName = $_POST['last_name'];
    $age = $_POST['age'];
    $hSchool = $_POST['home_school'];

    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "example_1_20.student_information";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if ($conn == false) {
        die('connection failed:' . mysqli_connect_error);
    }

    $queryUpdate = "UPDATE columns SET first_name='" . $fName . "',last_name='" . $lName . "',age='" . $age . "',home_school='" . $hSchool . "' WHERE studentID=" . $ID . "";

    if ($conn->query($queryUpdate) === TRUE) {
        header("Location:./student_information_table.php?status=updated");
    } else {
        header("Location:./student_information_table.php?status=failed");
    }
} else {
    header("Location:./student_information_table.php?error=IDemepty");
}


?>