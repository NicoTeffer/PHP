<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP Data Types </title>
</head>
<body>
<?php

    // STRING
    $x = "Hello World!";
    $y = "Hello world!";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<hr />";

    // INTEGER
    $num = 6000;
    var_dump($num);
    echo "<hr />";

    // FLOAT
    $num2 = 20.565;
    var_dump($num2);
    echo "<hr />";

    // ARRAY
    $sports = array("Soccer","Tennis","Baseball","Football");
    var_dump($sports);
    echo "<hr />";


    // NULL
    $color = "Blue";
    $color = null;
    var_dump($color);
    echo "<hr />";

    // BOOLEAN
    $x = true;
    $y = false;
    var_dump($x);
    var_dump($y);
    echo "<hr />";

?>
</body>
</html>