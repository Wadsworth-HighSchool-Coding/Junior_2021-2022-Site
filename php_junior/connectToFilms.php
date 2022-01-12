<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
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

if ($queryFilm = $conn->query("SELECT * FROM `film` ORDER BY rating ,title  ")){

    echo "<table border='1'>";
    echo "<caption>";
    echo "Returned rows from film are: " . $queryFilm->num_rows;
    echo "</caption>";
    echo"<th>";
    echo "Title" . "</th><th>". "Description" . "</th><th>" . "Release Year" ."</th><th>" . "Length" . "</th><th>" . "rating" . "</th><th>" . "Special Features" . "</th>";
    echo "</th>";
    while ($rows = $queryFilm->fetch_assoc()) {
        echo "<tr>";
        echo"<td>";
        echo "{$rows['title']}" . "</td><td>". "{$rows['description']}" . "</td><td>" . "{$rows['release_year']}" ."</td><td>" . "{$rows['length']}" . "</td><td>". "{$rows['rating']}". "</td><td>" .  "{$rows['special_features']}"."</td>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}


    $conn->close();
?>
</body>
</html>