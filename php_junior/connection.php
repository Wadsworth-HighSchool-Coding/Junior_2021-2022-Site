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
$dbName = "loginsystem-v1";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn == false) {
    die('connection failed:' . mysqli_connect_error);
}/*else if($conn == true){
    echo "connected";
}*/

//run a query
if ($query1 = $conn->query("SELECT * FROM `users` ORDER BY 'userId' DESC")) {

    /*echo "returned rows are: " . $query1->num_rows;
    echo "<br>";*/

    echo "<table border='1'>";
    echo"<td>";
    echo "userId" . "</td><td>". "userName" . "</td><td>" . "userUid" ."</td><td>" . "userEmail" . "</td><td>" . "userPwd" ."</td>";
    echo "</td>";
    while ($rows = $query1->fetch_assoc()) {
        echo "<tr>";
            echo"<td>";
            echo "{$rows['usersId']}" . "</td><td>". "{$rows['usersName']}" . "</td><td>" . "{$rows['usersUid']}" ."</td><td>" . "{$rows['usersEmail']}" . "</td><td>" . "{$rows['usersPwd']}" ."</td>";
            echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

    //frees up the memory that is used my query
    $query1->free_result();
}

/*if($query = mysqli_query($conn,"SELECT * FROM `users` ORDER BY 'userId' DESC")){

    echo "returned rows are: ". mysqli_num_rows($query);
}*/

//ends connection to database
$conn->close();
?>
</body>
</html>