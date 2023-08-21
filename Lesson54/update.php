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

    // SQL QUERY
    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // OUTPUT DATA OF EACH ROW
        while ($row = $result->fetch_assoc()) {
            $fname = $row["firstName"];
            $lname = $row["lastName"];
            $email = $row["email"];
        }
    }else {
        echo "0 results!";
    }
    
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP - MySQL Lesson </title>
</head>
<body>

<form action="updateuser.php" method="post">
    
    <table width="300" border="0" cellspacing="1" cellpadding="1">
        <tr>
            <td>First Name:</td>
            <td> <input type="text" name="fname" value="<?php echo $fname; ?>"></td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td> <input type="text" name="lname" value="<?php echo $lname; ?>"></td>
        </tr>
        <tr>
            <td>E-Mail:</td>
            <td> <input type="text" name="email" value="<?php echo $email; ?>"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td> <input type="submit" value="update"></td>
        </tr>
    </table>
    
    <input type="hidden" name="id" value="<?php echo $id ?>">

</form>

</body>
</html>

    <?php
    $conn->close();
    ?>

