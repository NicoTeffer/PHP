<?php

    // SERVER AND CONNECTION DATA
    $servername = "localhost";
    $username = "root";
    $password = "Moogle050582";
    $dbname = "myWebsite";

    // CREATE CONNECTION
    $conn = new mysqli($servername, $username, $password, $dbname);
    // CHECK CONNECTION
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // CREATE PREPARE STATEMENT
    $stmt = $conn->prepare("INSERT INTO users (firstName, lastName, email) VALUES (?, ?, ?)");

    // BIND PREPARE STATEMENT (types - sss = string | string | string)
    $stmt->bind_param("sss", $firstName, $lastName, $email);

    // SET PARAMETERS AND EXECUTE
    $firstName = "Lewis";
    $lastName = "Hall";
    $email = "lewis@me.com";
    $stmt->execute();

    $firstName = "Allen";
    $lastName = "Richards";
    $email = "arichards@me.com";
    $stmt->execute();

    $firstName = "Dave";
    $lastName = "Jones";
    $email = "dave@me.com";
    $stmt->execute();

    echo "New records created";

    // CLOSE STATEMENT AND DB CONNECTION
    $stmt->close();
    $conn->close();