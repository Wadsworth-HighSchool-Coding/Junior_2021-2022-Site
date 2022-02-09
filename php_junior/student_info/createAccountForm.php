<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create account</title>
    <style>

        .content {
            max-width: 500px;
            margin: auto;
        }

        h2 {
            color: Red;
        }
    </style>
    <script>

        function checkBlanks() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            var password1 = document.getElementById("password1").value;
            if ((username == "" || password == "" || password1 == "") || password1 != password) {
                alert("Please fill in all text boxes and make sure passwords are the same");
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>
<body>
<div class="content">
    <h1>Create Account or <a href="loginForm.php">Login</a></h1>
    <form id="student_information" name="student_information" method="post" action="createAccount.php"
          onsubmit="return checkBlanks()">

        <p><label for="username">Username:</label>
            <input type="text" id="username" name="username"></p>

        <p><label for="password">Password:</label>
            <input type="password" id="password" name="password"></p>
        <p><label for="password1">Password again:</label>
            <input type="password" id="password1" name="password1"></p>


        <p><input type="submit" name="submit" id="submit" value="submit"></p>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyInput") {
                echo "<h2> Error please try again</h2>";
            }
        }
        ?>

    </form>
</div>
</body>
</html>