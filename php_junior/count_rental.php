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

$queryStringCount = "SELECT SUM(film.rental_rate) as count FROM film WHERE film.rental_rate>2.99";
if ($result = $conn->query($queryStringCount)) {
    if($result->num_rows < 1){
        echo "No Results";
    }else {
        echo "<table border='1'>";
        echo "<th>";
        echo "Sum of Rental over 2.99" . "</th>";
        echo "</th>";
        while ($rows = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>";
            echo "{$rows['count']}" . "</td>";
            echo "</td>";
            echo "</tr>";
        }
    }

}
$conn->close();
?>
</body>
</html>