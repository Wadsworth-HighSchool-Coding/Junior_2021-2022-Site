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
    <title>students</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }

        table, caption, p {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
<p><a href="insertCommentsForm.php">Write a comment here</a></p>
<p><a href="logout.php">Logout</a></p>

<?php
if (isset($_GET["error"])) {
    if ($_GET["error"] == "IDempty") {
        echo "<p><b>Error pleas try again</b></p>";
    }
}
if (isset($_GET["status"])) {
    if ($_GET["status"] == "updated") {
        echo "<p><b>Record updated</b></p>";
    }
    if ($_GET["status"] == "failed") {
        echo "<p><b>Record failed to updated</b></p>";
    }
    if ($_GET["status"] == "deleted") {
        echo "<p><b>Record successfully deleted</b></p>";
    }
}
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "php_test";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn == false) {
    die('connection failed:' . mysqli_connect_error);
}

if ($comments = $conn->query("SELECT * FROM `comments` ORDER BY ID DESC ")) {

    echo "<table border='1'>";
    echo "<caption>";
    echo "Number of comments is: " . $comments->num_rows;
    echo "</caption>";
    echo "<th>";
    echo "ID" . "</th><th>" . "user" . "</th><th>" . "comment" . "</th>";
    echo "</th>";
    while ($rows = $comments->fetch_assoc()) {
        echo "<tr>";;
        echo "<td>";
        echo "{$rows['ID']}" . "</td>
        <td>" . "{$rows['username']}" . "</td>
        <td>" . "{$rows['comment']}" . "</td>";
        if($rows['username'] == $_SESSION["USERNAME"]){
            echo "<td>" . "<a href='updateForm.php?ID={$rows['ID']}'>update</a>" . "</td>";
        }
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

}


$conn->close();
?>
</body>
</html>