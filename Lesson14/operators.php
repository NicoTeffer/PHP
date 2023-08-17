<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP Operators </title>

</head>
<body>

<h2> PHP Arithmetic Operators </h2>
<!-- USED TO COMPARE TWO VALUES -->

<?php

   $x = 50;
   $y = 20;

   // ADDITION
    echo $x + $y;
    echo "<hr />";

    // SUBTRACTION
    echo $x - $y;
    echo "<hr />";

    // MULTIPLICATION
    echo $x * $y;
    echo "<hr />";

    // DIVISION
    echo $x / $y;
    echo "<hr />";

    // MODULUS
    echo $x % $y;
    echo "<hr />";

?>

<h2> PHP Assignment Operators </h2>
<!-- USED WITH NUMERIC VALUES TO WRITE VALUES TO A VARIABLE -->

<?php

    // THE LEFT OPERAND IS ASSIGNED THE VALUE ON THE RIGHT
    $x = 20;
    echo $x;

?>

<h2> Comparison Operators </h2>
<!-- USED TO COMPARE TWO VALUES (NUMBER TO A STRING) -->

<?php

    // EQUAL
    $x = 300;
    $y = "300";
    var_dump($x == $y); // Output is true because x = y
    echo "<hr />";

    // IDENTICAL
    $x = 300;
    $y = "300";
    var_dump($x === $y); // Output is false because types are not equal
    echo "<hr />";

    // NOT EQUAL
    $x = 300;
    $y = "300";
    var_dump($x != $y); // Output is false because the Values are equal
    echo "<hr />";

    // NOT EQUAL 2
    $x = 300;
    $y = "300";
    var_dump($x <> $y); // Output is false because the Values are equal
    echo "<hr />";

    // NOT IDENTICAL
    $x = 300;
    $y = "300";
    var_dump($x !== $y); // Output is false because types are not equal
    echo "<hr />";

    // GREATER THAN
    $x = 300;
    $y = 500;
    var_dump($x > $y); // Output is false because x is not greater than y
    echo "<hr />";

    // GREATER THAN 2
    $x = 300;
    $y = 500;
    var_dump($x < $y); // Output is true because x is less than y
    echo "<hr />";

    // GREATER THAN OR EQUAL TO
    $x = 300;
    $y = 500;
    var_dump($x >= $y); // Output is false because x is not greater than y or equal to y
    echo "<hr />";

    // LESS THAN OR EQUAL TO
    $x = 300;
    $y = 500;
    var_dump($x <= $y); // Output is true because x is less than y (also not equal, duh)
    echo "<hr />";

?>

<h2> Increment / Decrement Operators </h2>
<!-- USED TO INCREMENT OR DECREMENT A VARIABLES VALUE -->

<?php

    // Post-increment - Returns $x, then increments $x by one
    $x = 50;
    echo $x++;
    echo "<hr />";

    // Pre-increment - Increments $x by one, then returns $x
    $x = 50;
    echo ++$x;
    echo "<hr />";

    // Pre-decrement - Decrements $x by one, then returns $x
    $x = 50;
    echo --$x;
    echo "<hr />";

    // Post-decrement - Returns $x, then decrements $x by one
    $x = 50;
    echo $x--;
    echo "<hr />";

?>

<h2> Logical Operators </h2>
<!-- USED TO COMBINE CONDITIONAL STATEMENTS -->

<?php

    // AND - TRUE IF BOTH $x and $y are true
    $x = 200;
    $y = 300;

    if ($x == 200 and $y == 300) {
        echo "True";
        echo "<hr />";
    }

    // OR - TRUE IF EITHER $x or $y IS TRUE
    $x = 200;
    $y = 300;

    if ($x == 200 or $y == 300) {
        echo "True";
        echo "<hr />";
    }

    // AND - && - TRUE IF BOTH $x & $y are true
    $x = 200;
    $y = 300;

    if ($x == 200 && $y == 300) {
        echo "True";
        echo "<hr />";
    }

    // OR - $x || $y - TRUE IF EITHER $x OR $y IS TRUE
    $x = 200;
    $y = 300;

    if ($x == 200 || $y == 80) {
        echo "True";
        echo "<hr />";
    }

    // NOT - !$x - TRUE IF $x IS NOT TRUE
    $x = 200;
    $y = 300;

    if ($x !== 100) {
        echo "True";
        echo "<hr />";
    }

?>

<h2> Strings Operators </h2>
<!-- USED SPECIFICALLY FOR STRINGS -->

<?php

    // CONCATENATION - CONCATENATION OF $x and $y
    $x = "Hello";
    $y = "World";
    echo $x . $y;
    echo "<hr />";

    // CONCATENATION ASSIGNMENT - APPENDS $txt2 to $txt1
    $txt1 = "John";
    $txt2 = " Smith";
    $txt1 .= $txt2;
    echo $txt1;
    echo "<hr />";

?>

<h2> Array Operators </h2>
<!-- USED TO COMPARE ARRAYS -->

<?php

    // UNION - UNION OF $x and $y
    $x = array("a" => "blue", "b" => "red");
    $y = array("c" => "pink", "d" => "brown");

    print_r($x +$y); // UNION
    echo "<hr />";

    // EQUALITY - RETURNS TRUE IF $x and $y HAVE THE SAME KEY/VALUE PAIRS
    $x = array("a" => "blue", "b" => "red");
    $y = array("a" => "pink", "d" => "brown");

    var_dump($x == $y);
    echo "<hr />";

    // IDENTITY - RETURNS TRUE IF $x HAVE THE SAME KEY / VALUE PAIRS IN THE SAME ORDER AND OF THE SAME TYPES
    $x = array("a" => "blue", "b" => "red");
    $y = array("a" => "pink", "d" => "brown");

    var_dump($x === $y);
    echo "<hr />";

    // INEQUALITY - RETURNS TRUE IF $x IS NOT EQUAL TO $y
    $x = array("a" => "blue", "b" => "red");
    $y = array("a" => "pink", "d" => "brown");

    var_dump($x != $y);
    echo "<hr />";

    // INEQUALITY - RETURNS TRUE IF $x IS NOT EQUAL TO $y
    $x = array("a" => "blue", "b" => "red");
    $y = array("a" => "pink", "d" => "brown");

    var_dump($x <> $y);
    echo "<hr />";

    // NON-IDENTITY - RETURNS TRUE IF $x IS NOT IDENTICAL TO $y
    $x = array("a" => "blue", "b" => "red");
    $y = array("a" => "pink", "b" => "brown");

    var_dump($x !== $y);
    echo "<hr />";

?>

</body>
</html>
