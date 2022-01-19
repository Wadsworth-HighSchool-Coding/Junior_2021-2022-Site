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

$seachItem = $_GET['criteria'];
$queryString2 = "SELECT * FROM `film` WHERE title LIKE '%". $seachItem ."%' ORDER BY title  ";

if ($queryActor = $conn->query($queryString2)) {
    if($queryActor->num_rows < 1){
        echo "No Results";
    }else {
        echo "<table border='1'>";
        echo "<caption>There are $queryActor->num_rows results</caption>";
        echo "<th>";
        echo "film id" . "</th><th>" . "Title" . "</th><th>" . "Description" . "</th><th>" . "release year" . "</th><th>" . "language id" . "</th><th>" . "original language id" . "</th><th>" . "rental duration" . "</th><th>" . "Rental rate" . "</th><th>" . "length" . "</th><th>" . "Replacement cost" . "</th><th>" . "Rating" . "</th><th>" . "Special features" . "</th><th>" . "Last update" . "</th>";
        echo "film id" . "</th><th>" . "Title" . "</th><th>" . "Description" . "</th><th>" . "release year" . "</th><th>" . "language id" . "</th><th>" . "original language id" . "</th><th>" . "rental duration" . "</th><th>" . "Rental rate" . "</th><th>" . "length" . "</th><th>" . "Replacement cost" . "</th><th>" . "Rating" . "</th><th>" . "Special features" . "</th><th>" . "Last update" . "</th>";
        echo "</th>";
        while ($rows = $queryActor->fetch_assoc()) {
            echo "<tr>";
            echo "<td>";
            echo "{$rows['film_id']}" . "</td><td>" . "{$rows['title']}" . "</td><td>" . "{$rows['description']}" . "</td><td>" . "{$rows['release_year']}" . "</td><td>" . "{$rows['language_id']}" . "</td><td>" . "{$rows['original_language_id']}" . "</td><td>" . "{$rows['rental_duration']}" . "</td><td>" . "{$rows['rental_rate']}" . "</td><td>" . "{$rows['length']}" . "</td><td>" . "{$rows['replacement_cost']}" . "</td><td>" . "{$rows['rating']}" . "</td><td>" . "{$rows['special_features']}" . "</td><td>" . "{$rows['last_update']}" . "</td>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
$conn->close();
?>
</body>
</html>