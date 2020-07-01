<?php
    
    //echo $_POST["dayLaEmail"];
    $name = $_POST["dayLaTen"];
    $email = $_POST["dayLaEmail"];
    //echo $name ."<br>".$email;
    
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

    $sql = "INSERT INTO users (name, email)
    VALUES ('$name', '$email')";
    //echo $sql; exit;
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>