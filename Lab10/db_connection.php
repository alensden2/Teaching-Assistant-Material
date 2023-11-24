<?php
$hostname = 'db.cs.dal.ca'; // Replace with the actual hostname
$username = 'alen';    // Replace with your CSID
$password = 'Se4wFYZ7AKaa6eiQHGGHJoZD4'; // Replace with your DB password
$database = 'alen';    // Replace with your CSID

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
