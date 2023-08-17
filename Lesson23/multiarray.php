<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Multi-Arrays in PHP </title>
</head>
<body>
<?php

    $grades = array
    (
     array("John",50,60),
     array("Bob",40,25),
     array("Sam",35,48),
     array("Ted",55,26)
    );

    echo $grades[0][0] . ": Test1: " .$grades[0][1] . ", Test 2: " . $grades[0][2] . ".<br>";
    echo $grades[1][0] . ": Test1: " .$grades[1][1] . ", Test 2: " . $grades[1][2] . ".<br>";
    echo $grades[2][0] . ": Test1: " .$grades[2][1] . ", Test 2: " . $grades[2][2] . ".<br>";
    echo $grades[3][0] . ": Test1: " .$grades[3][1] . ", Test 2: " . $grades[3][2] . ".<br>";
    
?>
</body>
</html>