<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
    <style>
        .content {
            max-width: 500px;
            margin: auto;
        }
    </style>
    <script>
        function checkBlanks() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            if (username == "" || password == "") {
                alert("Please fill in all text boxes");
                return false;
            } else {
                return true;
            }
        }

    </script>
</head>
<body>
<div class="content">
    <h1>Login or <a href="createAccountForm.php">Create Account</a></h1>
    <?php
    if (isset($_GET['INFO'])) {
        //echo $_GET['INFO'];
        switch ($_GET['INFO']) {
            case "unkownUser":
                echo "<h2>Incorrect username or password</h2>";
                break;
            case "PleaseLogIn":
                echo "<h2>Please login before visiting other pages</h2>";
                break;

        }
    }
    ?>
    <form type="submit" method="post" name="form1" action="validateUser.php" onsubmit="return checkBlanks()">
        <p>

            <label for="username">Username: </label>
            <input type="text" id="username" name="username">
        </p>
        <p>

            <label for="password">password: </label>
            <input type="password" id="password" name="password">
        </p>

        <input type="submit" name="submit" id="submit" value="submit">

    </form>
</div>
</body>
</html>