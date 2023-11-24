<?php
// Start or resume the session
session_start();

// Destroy all data registered to the session
session_destroy();

// Redirect the user to the login page
header('Location: login.php');

// Ensure that no further code is executed after the redirect
exit();
?>
