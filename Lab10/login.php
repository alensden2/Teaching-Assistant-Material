<?php
include 'db_connection.php';

// Check if the login form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Retrieve user information from the database based on the provided username
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the user exists and the provided password matches the hashed password in the database
    if ($user && password_verify($password, $user['password'])) {
        // Start a new session to store user information
        session_start();

        // Store the user's ID in the session for later use
        $_SESSION['user_id'] = $user['id'];

        // Redirect the user to the profile page after successful login
        header('Location: profile.php');
        exit();
    } else {
        // Display an error message if the username or password is incorrect
        echo "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
</head>
<body>
    <h2>User Login</h2>
    <!-- The login form -->
    <form method="post" action="">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
