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
    <script>
        function confirmDelete(ID) {
            let check = confirm("Are you sure you want to delete this entry");
            if (check) {
                location.href = "delete_student.php?ID=" + ID;
            }
        }
    </script>
</head>
<body>
<p><a href="insertStudentsForm.php">Insert information here</a></p>


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
    echo "Delete" . "</th><th>" . "Student ID" . "</th><th>" . "First Name" . "</th><th>" . "Last Name" . "</th><th>" . "Age" . "</th><th>" . "Home School" . "</th><th>" . "Update Record" . "</th>";
    echo "</th>";
    while ($rows = $queryStudents->fetch_assoc()) {
        echo "<tr>";
        echo "<td>";
        echo "<input id = 'delete' type='button' name='delete' value='Delete' onclick='confirmDelete(" . $rows['studentID'] . ")'>";
        echo "</td>";
        echo "<td>";
        echo "{$rows['studentID']}" . "</td>
        <td>" . "{$rows['first_name']}" . "</td>
        <td>" . "{$rows['last_name']}" . "</td>
        <td>" . "{$rows['age']}" . "</td>
        <td>" . "{$rows['home_school']}" . "</td>
        <td>" . "<a href='updateForm.php?ID={$rows['studentID']}'>update</a>" . "</td>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

}


$conn->close();
?>
</body>
</html>