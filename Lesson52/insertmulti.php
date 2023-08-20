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

    // CREATE MULTI QUERY TO INSERT INTO users
    $sql = "INSERT INTO users (firstName, LastName, email)
            VALUES ('Niel', 'Jennings', 'harris@me.com');
            ";
    $sql .= "INSERT INTO users (firstName, LastName, email)
            VALUES ('Julie', 'Lam', 'julie@me.com');
            ";
    $sql .= "INSERT INTO users (firstName, LastName, email)
            VALUES ('Justin', 'Lee', 'justin@me.com');
            ";

    // ENSURES THAT THE QUERY WAS SUCCESSFUL
    if ($conn->multi_query($sql) === TRUE) {
        echo "New records created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
