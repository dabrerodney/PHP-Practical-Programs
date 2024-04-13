<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Creating a cookie
$cookie_name = "user1"; // Changed cookie name
$cookie_value = "Astel Dmello"; // Changed cookie value
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

// Modifying a cookie (not possible directly, need to set a new cookie)
$cookie_value_modified = "Jane Smith"; // New value for the modified cookie
setcookie($cookie_name, $cookie_value_modified, time() + (86400 * 30), "/"); // Set a new cookie with modified value

// Deleting a cookie
setcookie($cookie_name, "", time() - 3600, "/"); // Set the expiration time in the past to delete the cookie

// Output
if (isset($_COOKIE[$cookie_name])) { // Check if cookie exists before trying to access its value
    echo "Cookie '" . $cookie_name . "' is set with value: " . $_COOKIE[$cookie_name] . "<br>";
} else {
    echo "Cookie '" . $cookie_name . "' is deleted.<br>";
    echo "Value is: " . $cookie_value . "<br>"; // Output the original value after cookie deletion
}

?>

</body>
</html>