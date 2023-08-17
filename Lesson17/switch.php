<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Switch Statement in PHP </title>
</head>
<body>
<?php

    $car = "Lancia";

    switch ($car) {
        case "volvo":
            echo "You drive a Volvo!";
            break;
        case "bmw":
            echo "You drive a BMW!";
            break;
        case "honda":
            echo "You drive a Honda!";
            break;
        default:
            echo "You dont drive";
    }

?>
</body>
</html>