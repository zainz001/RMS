<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "rms";

$port = 5000;  
try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "incorrect port num"  ;
}
?>
