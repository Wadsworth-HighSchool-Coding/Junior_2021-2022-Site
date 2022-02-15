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
    <title>Update</title>
    <style>
        .content {
            max-width: 500px;
            margin: auto;
        }
    </style>

    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "IDempty") {
            echo "<p><b>Error failed to update record</b></p>";
        }
    }
    if (isset($_GET["ID"])) {
        $findID = $_GET['ID'];


        $dbServername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "php_test";

        $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        if ($conn == false) {
            die('connection failed:' . mysqli_connect_error);
        }

        $querySELECT = "SELECT * FROM comments WHERE ID = " . $findID;
        //echo "<p>".$querySELECT."</p>";
        if ($queryStudents = $conn->query($querySELECT)) {


            while ($rows = $queryStudents->fetch_assoc()) {
                $username = $rows['username'];
                $comment = $rows['comment'];
                $ID = $rows['ID'];
            }
        }


        $conn->close();
    } else {
        header("Location:student_information_table.php?error=IDempty");
    }


    ?>
    <script>
        function checkBlanks() {
            var username = document.getElementById("comment").value;
            if (comment == "" ) {
                alert("Please fill in all text boxes");
                return false;
            } else {
                return true;
            }
        }
    </script>
</head>
<body onload="getSchool();">
<div class="content">
    <h1>Update comment</h1>
    <form id="student_information" name="student_information" method="post" action="update.php" onsubmit="return checkBlanks()">
        <p><label for="comment" >comment:</label>
            <textarea name="comment" value="<?php echo $comment;?>">
            </textarea>
        </p>
        <input type="hidden" name="ID" value="<?php echo $ID;?>">
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