<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Loops in PHP </title>
</head>
<body>
<?php

    // WHILE LOOP
    $x = 1;

    while ($x < 10) {
        echo "The number is: $x <br>";
        $x++;
    }
    echo "<hr />";

    // DO WHILE LOOP
    $x = 6;
    do {
        echo "The number is: $x <br>";
        $x++;
    }while ($x <= 5);

?>
</body>
</html>
