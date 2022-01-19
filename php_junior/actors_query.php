<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "sakila";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn == false) {
    die('connection failed:' . mysqli_connect_error);
}

$seachItem = $_GET['criteria'];
$queryString2 = "SELECT * FROM `actor` WHERE last_name LIKE '%". $seachItem ."%' ORDER BY last_name ";
$queryString = "SELECT * FROM `actor` WHERE last_name = '". $seachItem ."' ORDER BY last_name";
if ($queryActor = $conn->query($queryString2)) {
    if($queryActor->num_rows < 1){
        echo "No Results";
    }else {
        echo "<table border='1'>";
        echo "<td>";
        echo "actor id" . "</td><td>" . "first name" . "</td><td>" . "last name" . "</td><td>" . "last update" . "</td>";
        echo "</td>";
        while ($rows = $queryActor->fetch_assoc()) {
            echo "<tr>";
            echo "<td>";
            echo "{$rows['actor_id']}" . "</td><td>" . "{$rows['first_name']}" . "</td><td>" . "{$rows['last_name']}" . "</td><td>" . "{$rows['last_update']}" . "</td>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

}

//ends connection to database
$conn->close();
?>
</body>
</html>