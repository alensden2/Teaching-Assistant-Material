<?php
// Include the file that establishes a database connection
include 'db_connection.php';

// Start or resume the session
session_start();

// Check if the user is not logged in (user ID is not set in the session)
if (!isset($_SESSION['user_id'])) {
    // Redirect the user to the login page
    header('Location: login.php');
    // Ensure that no further code is executed after the redirect
    exit();
}

// Get the user ID from the session
$user_id = $_SESSION['user_id'];

// Prepare and execute a SELECT query to retrieve user information based on the user ID
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$user_id]);

// Fetch the user data as an associative array
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <!-- Display a welcome message with the user's username -->
    <h2>Welcome, <?php echo $user['username']; ?>!</h2>
    <!-- You can display additional user information or actions here -->

    <!-- Provide a link to the logout script -->
    <a href="logout.php">Logout</a>
</body>
</html>
