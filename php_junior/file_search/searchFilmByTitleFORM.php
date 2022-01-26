<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie search</title>
    <style>
        body{
            text-align: center;

            background: darkcyan;
        }
    </style>
</head>
<body>
<form action="searchFilmByTitleSELECT.php" id="form1" method="get">
    <p>
    <h1>Search for a film</h1>

    <label for="criteria">Key word of movie:</label><input type="text" name="criteria" id="criteria">
    </p>
    <p>
        <input type="submit" name="submit" id="submit" value="submit">
    </p>
</form>

</body>
</html>