<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Introduction to Object-Oriented Programming </title>
</head>
<body>
<?php

    // CREATE CLASS
    class Person {
        // CREATE PROPERTIES (Variables tied to objects)
        public $firstName;
        public $lastName;
        public $age;

        // ASSIGNING VALUES TO THE PROPERTY VARIABLES
        public function __construct($firstName, $lastName, $age) {
            $this -> firstName = $firstName;
            $this -> lastName = $lastName;
            $this -> age = $age;
        }

        // CREAT A METHOD (FUNCTION TIED TO AN OBJECT)
        public function hello ()  {
            return "I am " . $this -> firstName . " " . $this -> lastName . ", my age is: " . $this -> age . "";
        }
    }

    // CREATING A NEW PERSON NAMED "JOHN SMITH" WHO IS 25 YEARS OLD
    $person1 = new Person("John","Smith",25);
    $person2 = new Person("Joe","Bob",35);

    // PRINT OUT WHAT THE HELLO METHOD RETURNS
    echo $person1 -> hello();
    echo "<br/>";
    echo $person2 -> hello();

?>
</body>
</html>
