<!DOCTYPE html>
<html>
<head>
    <title>Form Validation Examples</title>
</head>
<body>

<h2>Form Validation Examples</h2>

<!-- Client-Side Validation using JavaScript -->
<script>
function validateForm() {
    var email = document.getElementById("clientEmail").value;
    if (email == "") {
        alert("Email must be filled out (Client-Side Validation)");
        return false;
    }
}
</script>

<form onsubmit="return validateForm()">
    Email (Client-Side Validation): <input type="text" id="clientEmail">
    <input type="submit">
</form>
<hr>

<!-- Server-Side Validation using PHP -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $serverEmail = $_POST["serverEmail"];
    if (empty($serverEmail)) {
        echo "Email must be filled out (Server-Side Validation)";
    }
}
?>

<form method="post">
    Email (Server-Side Validation): <input type="text" name="serverEmail">
    <input type="submit">
</form>
<hr>

<!-- Using PHP Filter Functions -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filterEmail = $_POST["filterEmail"];
    if (!filter_var($filterEmail, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format (Using PHP Filter Functions)";
    }
}
?>

<form method="post">
    Email (Using PHP Filter Functions): <input type="text" name="filterEmail">
    <input type="submit">
</form>
<hr>

<!-- Using Regular Expressions -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $regexEmail = $_POST["regexEmail"];
    if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $regexEmail)) {
        echo "Invalid email format (Using Regular Expressions)";
    }
}
?>

<form method="post">
    Email (Using Regular Expressions): <input type="text" name="regexEmail">
    <input type="submit">
</form>

</body>
</html>
