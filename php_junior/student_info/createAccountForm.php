<?php
session_start();
?>
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
    <?php
    create_image();
    display();
    function display()
    {
    ?>
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
        <p>
            <img src="captcha_image.png" style="border: thin solid;">
        </p>
        <p>
            <label for="captcha">Captcha:</label>
            <input type="text" name="captcha" id="captcha">
        </p>

        <p><input type="submit" name="submit" id="submit" value="submit"></p>
        <?php
        }

        function create_image()
        {
            $image = imagecreatetruecolor(200, 50);
            $background_color = imagecolorallocate($image, 255, 255, 255);
            imagefilledrectangle($image, 0, 0, 200, 50, $background_color);

            $line_color = imagecolorallocate($image, 245, 66, 90);
            $number_of_lines = rand(3, 7);

            for ($i = 0; $i < $number_of_lines; $i++) {
                imageline($image, 0, rand() % 50, 250, rand() % 50, $line_color);
            }

            $pixel = imagecolorallocate($image, 0, 0, 255);
            for ($i = 0; $i < 500; $i++) {
                imagesetpixel($image, rand() % 200, rand() % 50, $pixel);
            }

            $allowed_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789';
            $length = strlen($allowed_letters);
            $letter = $allowed_letters[rand(0, $length - 1)];
            $word = '';
            $text_color = imagecolorallocate($image, 0, 0, 0);
            $cap_length = 6;// No. of character in image
            for ($i = 0; $i < $cap_length; $i++) {
                $letter = $allowed_letters[rand(0, $length - 1)];
                imagestring($image, 5, 5 + ($i * 30), 20, $letter, $text_color);
                $word .= $letter;
            }

            $_SESSION['captcha_string'] = $word;

            imagepng($image, "captcha_image.png");

        }

        ?>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "wrongCaptcha") {
                echo "<h2> Wrong captcha please try again</h2>";
            }
            if ($_GET["error"] == "emptyInput") {
                echo "<h2> Error please try again</h2>";
            }
            if ($_GET["error"] == "noCaptchaData") {
                echo "<h2> Error no captcha data please try again</h2>";
            }
        }
        ?>

    </form>
</div>
</body>
</html>