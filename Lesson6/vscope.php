<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Variable Scope </title>
</head>
<body>
<?php

    // GLOBAL SCOPE EXAMPLE

    $x = 5; // global scope

    function test1 () {
        // Will generate an Error
        echo "<p>Value of x is: $x</p>";
    }
    test1();

    echo "<p>Value of x is: $x</p>";

    // LOCAL SCOPE EXAMPLE

    function test2 () {
        $y = 5; // Local Scope
        echo "<p>Value of y is: $y</p>";
    }
    test2();

    // Will generate an Error
    echo "<p>Value of y is: $y</p>";

?>
</body>
</html>
