<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "john_doe";
$_SESSION["email"] = "john@example.com";

// Display session variables
echo "Session variables are set.<br>";
echo "Username: " . $_SESSION["username"] . "<br>";
echo "Email: " . $_SESSION["email"] . "<br>";

// Destroy the session
session_destroy();
echo "Session destroyed.";

?>

</body>
</html>