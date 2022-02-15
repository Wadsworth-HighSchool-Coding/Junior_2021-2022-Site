<?php
session_start();
if (isset($_SESSION["captcha_string"]) && isset($_POST["captcha"])) {
    if ($_SESSION["captcha_string"] == $_POST["captcha"]) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            header("location: ./createAccountForm.php?error=emptyInput");
        } else {
            $dbServername = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "example_1_20.student_information";

            $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

            if ($conn == false) {
                die('connection failed:' . mysqli_connect_error);
            }


            $queryString = "INSERT INTO user_accounts (username,password) 
            VALUES ('" . $username . "','" . $password . "')";


            if ($conn->query($queryString) === true) {
                header("location: ./loginForm.php");
            } else {
                echo "Error:" . $queryString . "<br>" . $conn->error;
            }

            $conn->close();
        }
    } else {
        header("location: ./createAccountForm.php?error=wrongCaptcha");
    }
} else {
    header("location: ./createAccountForm.php?error=noCaptchaData");
}