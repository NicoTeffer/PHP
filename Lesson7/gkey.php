<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Global Keyword </title>
</head>
<body>
<?php

    $x = 30;
    $y = 20;

    function test1 () {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    test1(); // Execute Function
    echo $y; // Output Value of Variable y
    echo "<br/>";
    echo $x; // Output Value of Variable x

?>
</body>
</html>
