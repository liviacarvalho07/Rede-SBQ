<?php
// login.php

// Database connection
$host = 'localhost';
$dbname = 'eeepma26_rede_sbq';
$user = 'eeepma26_rede_sbq';
$password = 'rede@sbq01';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
