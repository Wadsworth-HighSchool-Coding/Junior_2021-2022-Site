<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>selectScript</title>
    <?php
    $hSchool = "Barberton"
    ?>
    <script>
        function getSelectValues() {
            var x = document.getElementById("home_school");
            var L = x.length;
            var setValue = "<?php echo $hSchool?>";
            var index;
            for (let i = 0; i < L; i++) {
                if (x.options[i].value == setValue) {
                    index = i;
                }
                //alert(x.options[i].value);
            }

            //same as above just more scalable
            // for (const x1 of x) {
            //     index = x.options[x1] == setValue?x1.options[x1]:setValue;
            //     if(x1.value == setValue)
            //     {
            //         index = x1;
            //     }
            // }
            alert(index);
        }
    </script>
</head>
<body onLoad="getSelectValues();">
<p><label for="home_school">Home school:</label>
    <select name="home_school" id="home_school">
        <option value="Barberton">Barberton city schools</option>
        <option value="Wadsworth">Wadsworth city schools</option>
        <option value="Norton">Norton city schools</option>
        <option value="Copley">Copley city schools</option>
    </select></p>
</body>
</html>