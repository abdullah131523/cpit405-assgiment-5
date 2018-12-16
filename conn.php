<?php


$servername = "localhost";
$username = "abdullah13";
$password = "";
$database = "Abdullah";

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// check the connection
if ($conn->connect_error) {
    
    echo "Failed to connect to database!";
    die("Connection failed: ");
}
  
?>