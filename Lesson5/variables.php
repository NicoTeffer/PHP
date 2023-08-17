<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Variables </title>
</head>
<body>
<?php

    $var1 = "Hello World!";
    $x = 15;
    $y = 20.5;

    echo $var1;
    echo "<br/>";
    echo $x;
    echo "<br/>";
    echo $y;
    echo "<hr />";

    $sport = "Football";
    echo "I like $sport!";
    echo "<hr />";

    $sport = "Football";
    echo "I like " . $sport . "!";
    echo "<hr />";

    $x = 5;
    $y = 6;
    echo $x + $y;

?>
</body>
</html>
