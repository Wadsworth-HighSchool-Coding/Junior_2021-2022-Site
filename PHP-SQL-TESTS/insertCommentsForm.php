<?php
require 'loginCheck.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insert</title>
    <style>
        h2 {
            color: Red;
        }

        .content {
            max-width: 500px;
            margin: auto;
        }
    </style>

    <script>
        function checkBlanks() {
            var comment = document.getElementById("comment").value;
            if(/\S/.test(comment)) {
                return true;
            }else{
                alert("Please fill in all text boxes");
                return false;
            }
            return false;
        }
    </script>
</head>
<body>
<div class="content">
    <h1>Insert comment</h1>
    <form id="comments" name="comments" method="post" action="insertComments.php" onsubmit="return checkBlanks();">

        <p><label for="comment" >comment:</label>
            <textarea name="comment" id="comment" value="">
            </textarea>
        </p>


        <p><input type="submit" name="submit" id="submit" value="submit"></p>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyInput") {
                echo "<h2> Please fill in all items</h2>";
            }
        }
        ?>

    </form>
</div>
</body>
</html>