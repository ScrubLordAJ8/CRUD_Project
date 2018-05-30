<?php
    $mySQL_host = "localhost";
    $mySQL_username = "aschaefer8";
    $mySQL_password = "Anorak10!";
    $mySQL_database = "passwords";
    
    $conn=new mysqli($mySQL_host, $mySQL_username, $mySQL_password, $mySQL_database);
    if ($conn->connect_error) {
        die("Connection Failed:" . $conn->connect_error);
    }
?>