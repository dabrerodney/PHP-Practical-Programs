<!DOCTYPE html>
<html>
<head>
    <title>Email Validation</title>
</head>
<body>

<h2>Email Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Email: <input type="text" name="email">
    <input type="submit" name="submit" value="Submit">
</form>

<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve email from form
    $email = $_POST["email"];

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Email address '{$email}' is valid.</p>";
    } else {
        echo "<p>Email address '{$email}' is not valid.</p>";
    }
}
?>

</body>
</html>
