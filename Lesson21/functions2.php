<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Functions in PHP Part 2</title>
</head>
<body>
<?php

    // DEFAULT ARGUMENT VALUE
    function myAge ($minage = 30) {
        echo "My age is: $minage <br>";
    }

    myAge();
    myAge(50);
    myAge(60);
    myAge(18);

    echo "<hr />";

    // RETURNING VALUES
    function add ($x, $y) {
        return $x + $y;
    }

    echo " 1 + 2 = " . add(1,2) . "<br>";
    echo " 3 + 4 = " . add(3,4) . "<br>";
    echo " 5 + 5 = " . add(5,5) . "<br>";

?>
</body>
</html>