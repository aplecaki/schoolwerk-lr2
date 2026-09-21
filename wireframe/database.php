<?php
$servername = "mysql";
$username = "root";
$password = "password";
$dbnaam = "leerstuff"; 

try {
    $conn = new mysqli($servername, $username, $password, $dbnaam);
    if ($conn->connect_error) {
        error_log($conn->connect_error);
        exit("Connection DB failed");
    }
} catch (Exception $e) {
    error_log($e);
    exit("Connection DB failed");
}

return $conn;