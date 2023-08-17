<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP Strings </title>
</head>
<body>
<?php

    // WORD COUNT
    echo str_word_count("Hello World!");
    echo "<hr />";

    // REVERSE WORDS
    echo strrev("Hello World!");
    echo "<hr />";

    // SEARCH FOR TEXT INSIDE A STRING
    echo strpos("Hello World!", "World"); // outputs 6
    echo "<hr />";

    // REPLACE TEXT INSIDE A STRING
    echo str_replace("world", "John", "Hello world!"); // outputs Hello John!
    echo "<hr />";
    
?>
</body>
</html>
