<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Sorting Arrays in PHP </title>
</head>
<body>

<?php

    // SORT
    $names = array("John", "Bob", "Dana", "Sue", "Ted", "Sam", "Xena", "Zara");
    sort($names);

    $nlen = count($names);
    for ($x = 0; $x < $nlen; $x++) {
        echo $names[$x];
        echo "<br>";
    }

    echo "<hr/>";

    // ASSOCIATIVE ARRAY SORT ACCORDING TO VALUE
    $tscore = array("John" => "60", "Bill" => "80", "Dan" => "75");
    asort($tscore);

    foreach ($tscore as $x => $x_value) {
        echo "Key=" . $x . ", Value= " . $x_value;
        echo "<br>";
    }
    
?>

</body>
</html>
