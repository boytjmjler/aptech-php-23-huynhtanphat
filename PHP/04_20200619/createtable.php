<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "aptech_php_23_04";

    //Create connection
    $conn = mysqli_connect($serverName, $userName, $password, $database);

    // Change db to "aptect_php_23_04" db
    //$conn = mysqli_connect($serverName, $userName, $password);
    //mysqli_select_db($conn, $database);

    //Check connection
    if (!$conn) {
        die("Connect Failed: " . mysqli_connect_error());
    }

    //Create database
    $sql = "CREATE TABLE users (
        id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(255),
        email VARCHAR(255) UNIQUE
    )";
    if (mysqli_query($conn, $sql)) {
        echo "Table users created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
  
    mysqli_close($conn);
?>