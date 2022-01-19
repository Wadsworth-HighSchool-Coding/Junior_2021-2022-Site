<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie results</title>
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


$queryStringMin = "SELECT Min(film.rental_rate) AS MinRental,Max(film.rental_rate) AS MaxRental FROM film";
if ($queryMinMax = $conn->query($queryStringMin)) {
    if($queryMinMax->num_rows < 1){
        echo "No Results";
    }else {
        echo "<table border='1'>";
        echo "<caption>Min</caption>";
        echo "<th>";
        echo "Max Rental" . "</th><th>" . "Min Rental" . "</th>";
        echo "</th>";
        while ($rows = $queryMinMax->fetch_assoc()) {
            echo "<tr>";
            echo "<td>";
            echo "{$rows['MaxRental']}" . "</td><td>" . "{$rows['MinRental']}" . "</td>";
            echo "</td>";
            echo "</tr>";
        }
    }

}
$conn->close();
?>
</body>
</html>