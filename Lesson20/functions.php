<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Functions in PHP </title>
</head>
<body>
<?php

    // BASIC FUNCTION
    function displayText () {
        echo "My first function!";
    }

    displayText();

    echo "<hr />";

    // FUNCTION WITH ARGUMENTS
    function myCar ($car, $color) {
        echo "$car, $color <br>";
    }

    myCar("Volvo", "blue");
    myCar("BMW", "red");
    myCar("Honda", "green");
    
?>
</body>
</html>