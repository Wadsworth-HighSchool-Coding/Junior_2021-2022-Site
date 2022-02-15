<?php
session_start();
if ($_SESSION["LOGINCHECK"] != 1) {
    header("Location:loginForm.php?INFO=PleaseLogIn");
}
?>