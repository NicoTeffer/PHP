<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Syntax </title>
</head>
<body>

<?php
echo "Hello World!";

    // Comment

    # Comment Alt

    /*
    Multi-line Comment Block
    Multi-line Comment Block
    Multi-line Comment Block
    */

    // Comments contained inside code
    $x = 10 /* + 5 */ + 20;
    echo $x;
    echo "<hr />";

    echo "Text Sample 1<hr />";
    echo "Text Sample 1<hr />";
    echo "Text Sample 1<hr />";

    $car = "volvo";
    echo "My car is a " . $car . "<br/>";
    echo "My car is a " . $CAR . "<br/>";
    echo "My car is a " . $cAR . "<br/>";

?>
</body>
</html>
