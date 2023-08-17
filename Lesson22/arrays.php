<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Arrays in PHP </title>
</head>
<body>
<?php

    // INDEXED ARRAYS
    $colors = array("Blue","Green","Red");
    echo "My Favorite Colors are: " . $colors[0] . ", " . $colors[1] . " and " . $colors[2] . "<hr />";

    // ARRAY LENGTH
    echo count($colors) . "<hr />";

    // LOOP THROUGH AN INDEXED ARRAY
    $arrLength = count($colors);

    for ($x = 0; $x < $arrLength; $x++) {
       echo  $colors[$x] . "<br>";
    }

    echo "<hr />";

    // ASSOCIATIVE ARRAYS
    $tscore = array("John" => "60", "Bill" => "80", "Dan" => "75");
    echo "Bill scored " . $tscore["Bill"] . " /100.";

    echo "<hr />";

    // LOOP THROUGH AN ASSOCIATIVE ARRAY
    foreach ($tscore as $x => $score) {
        echo "Key =" . $x . ", Score=" . $score;
        echo "<br>";
    }

?>
</body>
</html>