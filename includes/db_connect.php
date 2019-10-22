<?php
    $dbServer = "localhost";
    $dbUsername = "root";    // This is the same username as phpMyAdmin
    $dbPassword = "Secur3Pa$$w0rd";    // This is the same password as phpMyAdmin
    $dbName = "mod6_blog_cms";

    // Create connection
    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
?>