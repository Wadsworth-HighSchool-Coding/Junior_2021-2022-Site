<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>avg and replace</title>
    <style>

        table,caption{
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            background: rgba(179, 255, 0, 0.75);
        }
        body{
            background: darkcyan;
        }

    </style>
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


$queryAvg = "SELECT AVG(film.rental_duration) AS avgDur,AVG(film.replacement_cost) AS avgReplace FROM film";

if ($queryAvgSearch = $conn->query($queryAvg)) {
    if($queryAvgSearch->num_rows < 1){
        echo "No Results";
    }else {
        echo "<table border='1'>";
        echo "<caption>Averages</caption>";
        echo "<th>";
        echo "Avg rental duration" . "</th><th>" . "Avg replacement cost" . "</th>";
        echo "</th>";
        while ($rows = $queryAvgSearch->fetch_assoc()) {
            echo "<tr>";
            echo "<td>";
            echo "{$rows['avgDur']}" . "</td><td>" . "{$rows['avgReplace']}" . "</td>";
            echo "</td>";
            echo "</tr>";
        }
    }

}
$conn->close();
?>
</body>
</html>