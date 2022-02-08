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
</head>
<body>
<div class="content">
    <h1>Login</h1>
    <?php
    if (isset($_GET['INFO'])) {
        //echo $_GET['INFO'];
        switch ($_GET['INFO']) {
            case "unkownUser":
                echo "<h2>Incorrect username or password</h2>";
            case "PleaseLogIn":
                echo "<h2>Please login before visiting other pages</h2>";

        }
    }
    ?>
    <form action="validateUser.php" type="submit" method="post" name="form1">
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