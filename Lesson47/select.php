<?php

    $servername = "localhost";
    $username = "root";
    $password = "Moogle050582";
    // ADDED DB NAME
    $dbname = "myWebsite";

    // CREATE CONNECTION
    $conn = new mysqli($servername, $username, $password, $dbname);

    // CHECK CONNECTION
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo "Connected successfully!";
    echo "<br>";
    echo "<br>";

    // SAVES QUERY WHERE FIRST- & LASTNAME MATCH)
    $sql = "
    SELECT email FROM users WHERE firstName='Ted' AND lastName='Smith';
    ";
    // ESTABLISHED CONNECTION AND SENDS QUERY
    $result = $conn->query($sql);

    echo var_dump($result);
    echo "<br>";
    echo "<br>";

    if ($result->num_rows > 0) {
        // OUTPUT DATA IF THERE IS DATA IN ROWS QUERY
        while ($row = $result->fetch_assoc()) {
        echo "Email: " . $row["email"] . "<br>";
        }
    } else {
        echo " 0 results!";
    }

    $conn->close();