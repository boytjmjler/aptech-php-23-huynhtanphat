<?php
    $serverName = "localhost";
    $userName = "root";
    $password = "";

    //Create connection
    $conn = mysqli_connect($serverName, $userName, $password);

    //Check connection
    if (!$conn) {
        die("Connect Failed: " . mysqli_connect_error());
    }

    //Create database
    $sql = "CREATE DATABASE aptech_php_23_04";
    if (mysqli_query($conn, $sql)){
        echo "Database create successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>