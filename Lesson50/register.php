<?php

    $fname = val($_POST["fname"]);
    $lname = val($_POST["lname"]);
    $email = val($_POST["email"]);

    // FORM VALIDATION
    function val($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

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

    // CREATE QUERY TO INSERT INTO users
    $sql = "
            INSERT INTO users (firstName, LastName, email)
            VALUES ('$fname', '$lname', '$email');
            ";

    // ENSURES THAT THE QUERY WAS SUCCESSFUL
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
