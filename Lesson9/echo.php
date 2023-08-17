<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Echo vs. Print </title>
</head>
<body>
<?php

    // Basic Output using echo
    echo "<H1>Test Header</h1>";
    echo "Sample Paragraph 1. <br>";

    // Echo allows multiple parameters - Print doesnt
    echo "This ", "string ", "has ", "multiple parameters ";
    echo "<HR />";

    // Output Variables echo
    $txt1 = "Sample Text 1";
    $txt2 = "Soccer";
    $x = 20;
    $y = 30;

    echo "<h2>" . $txt1 . "</h2>";
    echo "I like " . $txt2 . "<br>";
    echo $x + $y;

    // Basic Output using Print
    print "<h1>Test Header </h1>";
    print "Sample Paragraph 1. <br>";
    print "<hr />";

    // Output Variables Print
    $txt1 = "Sample Text 1";
    $txt2 = "Soccer";
    $x = 20;
    $y = 30;

    print "<h2>" . $txt1 . "</h2>";
    print "I like " . $txt2 . "<br>";
    print $x + $y;

?>
</body>
</html>