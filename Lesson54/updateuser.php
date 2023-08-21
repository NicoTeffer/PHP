<?php

    // SERVER AND CONNECTION DATA
    $servername = "localhost";
    $username = "root";
    $password = "Moogle050582";
    $dbname = "myWebsite";

    // FORM VARIABLES
    $fname = val($_POST["fname"]);
    $lname = val($_POST["lname"]);
    $email = val($_POST["email"]);
    $id = val($_POST["id"]);

    // VALIDATION OF FORM VARIABLES
    function val($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // CREATE CONNECTION
    $conn = new mysqli($servername, $username, $password, $dbname);

    // CHECK CONNECTION
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // MYSQL QUERY FOR UPDATE USERS TABLE WITH THE NEW VALUES
    $sql = "UPDATE users SET firstName='$fname', lastName='$lname', email='$email' WHERE id='$id'";

    // REDIRECT BACK TO MAIN PAGE (PREV PAGE)
    if ($conn->query($sql) === TRUE) {
        header("location:delete.php?message=success&id=");
    }else {
        echo "Error updating record: " . $conn->error;
    }

    // CLOSE DATABASE CONNECTION
    $conn->close();
