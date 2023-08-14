<?php

$host = "localhost"; 
$user = "root"; 
$password = ""; 
$dbname = "wiibou"; 

$conn = new mysqli($host, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully.";

mysqli_close($conn);

?>
