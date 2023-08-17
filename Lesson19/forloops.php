<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> For Loops in PHP </title>
</head>
<body>
<?php

    // FOR LOOP
    for ($x = 0; $x <=10; $x++) {
        echo "$x <br>";
    }

    echo "<hr />";

    // FOR EACH LOOP
    $cars = array("volvo","bmw","honda","ford");
    foreach ($cars as $string) {
        echo "$string <br>";
    }
    
?>
</body>
</html>
