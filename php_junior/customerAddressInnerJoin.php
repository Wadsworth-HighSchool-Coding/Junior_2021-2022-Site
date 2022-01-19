<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>customer results</title>
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


$queryString2 = "SELECT customer.last_name, customer.first_name, address.address, address.city_id, address.postal_code, address.phone
                FROM customer INNER JOIN address ON customer.address_id=address.address_id;";

if ($queryCustomer = $conn->query($queryString2)) {
    if($queryCustomer->num_rows < 1){
        echo "No Results";
    }else {
        echo "<table border='1'>";
        echo "<caption>There are $queryCustomer->num_rows results</caption>";
        echo "<th>";
        echo "last_name" . "</th><th>" . "first_name" . "</th><th>" . "address" . "</th><th>" . "city_id" . "</th><th>" . "postal_code" . "</th><th>" . "phone" . "</th>";
        echo "</th>";
        while ($rows = $queryCustomer->fetch_assoc()) {
            echo "<tr>";
            echo "<td>";
            echo "{$rows['last_name']}" . "</td><td>" . "{$rows['first_name']}" . "</td><td>" . "{$rows['address']}" . "</td><td>" . "{$rows['city_id']}" . "</td><td>" . "{$rows['postal_code']}" . "</td><td>" . "{$rows['phone']}" . "</td>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>
</body>
</html>