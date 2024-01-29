<?php
    $servername = "localhost";
    $username = "root";
    $password = "cdti1234";
    $database_name = "db_esp32";

    // Create MySQL connection fom PHP to MySQL server
    $connection = new mysqli($servername, $username, $password, $database_name);
    // Check connection
    if ($connection->connect_error) {
    die("MySQL connection failed: " . $connection->connect_error);
    }
?>