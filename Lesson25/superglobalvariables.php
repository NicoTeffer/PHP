<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Super-global Variables </title>
</head>
<body>

<?php

    // GLOBAL VARIABLE
    $x = 30;
    $y = 40;

    function add () {
        $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];
    }

    add();
    echo $z;

    // OTHER SUPER-GLOBALS
    echo "<hr />";

    echo $_SERVER['PHP_SELF'];
    echo "<hr />";
    echo $_SERVER['SERVER_NAME'];
    echo "<hr />";

?>

</body>
</html>