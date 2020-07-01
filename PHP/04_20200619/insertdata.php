<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "aptech_php_23_04";

    //Create connection
    $conn = mysqli_connect($serverName, $userName, $password, $database);

    //Check connection
    if (!$conn) {
        die("Connect Failed: " . mysqli_connect_error());
    }

    //Insert data
    $sql = "INSERT INTO users (name, email)
    VALUES ('Nam', 'john@example.com')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  
    mysqli_close($conn);
?>