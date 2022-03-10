<?php
$dbHost = "localhost";
$dbUser = "u243992594_sanp";
$dbPass = "Pritesh1994";
$dbDatabase = "u243992594_sanpra";
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbDatabase);
if ($conn->connect_error) {
    die("Connection failed ");
}    
?>

