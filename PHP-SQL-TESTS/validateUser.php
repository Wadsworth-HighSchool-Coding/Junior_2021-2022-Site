
<?php
session_start();
if (isset($_SESSION["captcha_string"]) && isset($_POST["captcha"])) {
    if ($_SESSION["captcha_string"] == $_POST["captcha"]) {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $dbServername = "localhost";
            $dbUsername = "root";
            $dbPassword = "";
            $dbName = "php_test";

            $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

            if ($conn == false) {
                die('connection failed:' . mysqli_connect_error);
            }

            $queryString = "SELECT * FROM user_accounts WHERE username = '" . $username . "' AND password = '" . $password . "' ORDER BY ID";
            echo $queryString;
            if ($query1 = $conn->query($queryString)) {
                echo "\nReturned rows are: " . $query1->num_rows;
                if ($query1->num_rows >= 1) {
                    $_SESSION["LOGINCHECK"] = 1;
                    $_SESSION["USERNAME"] = $username;
                    header("location:student_information_table.php");
                } else {
                    header("Location:./loginForm.php?INFO=unkownUser");
                }
            }
        } else {
            header("Location:./loginForm.php?INFO=unkownUser");
        }
    } else {
        header("Location: ./loginForm.php?INFO=badCaptcha");
    }
} else {
    header("Location: ./loginForm.php?INFO=noCaptchaData");
}