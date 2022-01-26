<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <style>
        h2 {
            color: Red;
        }
    </style>
</head>
<body>

<?php
if (isset($_GET["ID"])) {
    $findID = $_GET['ID'];


    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "example_1_20.student_information";

    $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

    if ($conn == false) {
        die('connection failed:' . mysqli_connect_error);
    }

    $querySELECT = "SELECT * FROM columns WHERE studentID = " . $findID;
    //echo "<p>".$querySELECT."</p>";
    if ($queryStudents = $conn->query($querySELECT)) {


        while ($rows = $queryStudents->fetch_assoc()) {
            $fName = $rows['first_name'];
        }

    }


    $conn->close();
} else {
    echo "ID not Found";
    echo "<p><a href='student_information_table.php'>Return to view data</a></p>";
}


?>
<h1>Update student data</h1>
<form id="student_information" name="student_information" method="post" action="insertStudents.php">
    <p><label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name"></p>
    <p><label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name"></p>

    <p><label for="age">Age:</label>
        <input type="text" id="age" name="age"></p>

    <p><label for="home_school">Home school:</label>
        <select name="home_school" id="home_school">
            <option value="Barberton">Barberton city schools</option>
            <option value="Wadsworth">Wadsworth city schools</option>
            <option value="Norton">Norton city schools</option>
            <option value="Copley">Copley city schools</option>
        </select></p>
    <p><input type="submit" name="submit" id="submit" value="submit"></p>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyInput") {
            echo "<h2> Please fill in all items</h2>";
        }
    }
    ?>

</form>
</body>
</html>