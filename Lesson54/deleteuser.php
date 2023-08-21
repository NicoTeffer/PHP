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

    $id = $_GET["id"];

    // SQL QUERY TO DELETE THE RECORD
    $sql = "DELETE FROM users WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        // RETURNS USER BACK TO THE PREVIOUS HEADER PAGE AFTER EXECUTING STATEMENT
        header("location:delete.php?message=delete");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
