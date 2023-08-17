<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP Constants </title>
</head>
<body>
<?php
    // CASE-SENSITIVE
    define("WELCOME", "Hello my name is John Smith");
    echo WELCOME;

    echo "<hr />";

    // CASE-INSENSITIVE
    define("WELCOME2", "Hello my name is John Smith", true);
    echo WELCOME2;

    echo "<hr />";

    // CONSTANTS ARE GLOBAL!
    define("CAR", "VOLVO");

    function myCar () {
        echo CAR;
    }

    myCar();

?>
</body>
</html>
