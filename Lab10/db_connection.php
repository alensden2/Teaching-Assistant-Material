<?php
$hostname = ''; // Replace with the actual hostname
$username = '';    // Replace with your CSID
$password = ''; // Replace with your DB password
$database = '';    // Replace with your CSID

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
