<?php
$host = 'db.cs.dal.ca'; // Replace with your database host
$username = 'alen'; // Replace with your database username
$password = ''; // Replace with your database password
$database = 'alen';

$conn = mysqli_connect($host, $username, $password, $database);
if(mysqli_connect_errno()){
    echo "failed connection";
    exit();
}
echo "Connection Success"
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Handle form submission
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST["name"];
//     $phone = $_POST["phone"];

//     // Insert data into the database
//     $sql = "INSERT INTO contacts (name, phone) VALUES ('$name', '$phone')";
//     $result = $conn->query($sql);

//     if ($result === TRUE) {
//         echo "Record added successfully!";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }

// // Close the database connection
// $conn->close();
?>
