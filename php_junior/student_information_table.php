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
<p><a href="insertStudentsForm.php">Insert information here</a></p>

<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "example_1_20.student_information";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($conn == false) {
    die('connection failed:' . mysqli_connect_error);
}

if ($queryStudents = $conn->query("SELECT * FROM `columns` WHERE 1")) {

    echo "<table border='1'>";
    echo "<caption>";
    echo "Number of students is: " . $queryStudents->num_rows;
    echo "</caption>";
    echo "<th>";
    echo "Student ID" . "</th><th>" . "First Name" . "</th><th>" . "Last Name" . "</th><th>" . "Age" . "</th><th>" . "Home School" . "</th>";
    echo "</th>";
    while ($rows = $queryStudents->fetch_assoc()) {
        echo "<tr>";
        echo "<td>";
        echo "{$rows['studentID']}" . "</td><td>" . "{$rows['first_name']}" . "</td><td>" . "{$rows['last_name']}" . "</td><td>" . "{$rows['age']}" . "</td><td>" . "{$rows['home_school']}" . "</td>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}


$conn->close();
?>
</body>
</html>