<?php
    $hostname = "localhost";
    $username = "root";
    $database = "bs_admin";
    $password = "mysql";

    $conn = new mysqli($hostname, $username, $password, $database);
    if($conn->connect_error)
        die($conn->connect_error);
    else
        echo "Connection successful!!";
?>