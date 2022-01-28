<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insert</title>
    <style>
        h2 {
            color: Red;
        }

        .content {
            max-width: 500px;
            margin: auto;
        }
    </style>
</head>
<body>
<div class="content">
    <h1>Insert student data</h1>
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
</div>
</body>
</html>