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

    // SQL QUERY
    $sql = "SELECT id, firstName, lastName, email FROM users";
    $result = $conn->query($sql);
    
?>

<table width="300" border="1" cellspacing="1" cellpadding="1">
    
    <?php
        if ($result->num_rows > 0) {
            // OUTPUT DATA FOR EACH ROW
            while ($row = $result->fetch_assoc()) {
    ?>

    <tr>
        <td>ID</td>
        <td><?php echo $row["id"]; ?></td>
        <td><a href="deleteuser.php?id=<?php echo $row["id"] ?>">Delete</a></td>
    </tr>
    <tr>
        <td>First Name</td>
        <td><?php echo $row["firstName"]; ?></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><?php echo $row["lastName"]; ?></td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $row["email"]; ?></td>
        <td>&nbsp;</td>
    </tr>
    
    <?php
            }
    ?>

</table>

<?php
        } else {
            echo "0 results";
        }

        $conn->close();