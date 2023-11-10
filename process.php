<?php
$host = 'your_database_host'; // Replace with your database host
$username = 'your_database_username'; // Replace with your database username
$password = 'your_database_password'; // Replace with your database password
$database = 'phonebook';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];

    // Insert data into the database
    $sql = "INSERT INTO contacts (name, phone) VALUES ('$name', '$phone')";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Record added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
