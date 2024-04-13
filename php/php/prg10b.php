<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form action="prg10b.php" method="post">

    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>

    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br>

    <label for="gender">Gender:</label><br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>

    <label for="hobbies">Hobbies:</label><br>
    <input type="checkbox" id="hobbies" name="hobbies[]" value="reading">
    <label for="reading">Reading</label><br>
    <input type="checkbox" id="hobbies" name="hobbies[]" value="movies">
    <label for="movies">Movies</label><br>
    <input type="checkbox" id="hobbies" name="hobbies[]" value="music">
    <label for="music">Music</label><br>

    <input type="submit" value="Register">

</form>
<?php

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate the name field
    if (empty($_POST["name"])) {
        $nameError = "Name cannot be empty.";
    } else {
        $name = $_POST["name"];
    }

    // Validate the email field
    if (empty($_POST["email"])) {
        $emailError = "Email cannot be empty.";
    } else {
        $email = $_POST["email"];
    }

    // Validate the gender field
    if (empty($_POST["gender"])) {
        $genderError = "Please select a gender.";
    } else {
        $gender = $_POST["gender"];
    }

    // Validate the hobbies field
    if (empty($_POST["hobbies"])) {
        $hobbiesError = "Please select at least one hobby.";
    } else {
        $hobbies = $_POST["hobbies"];
    }

    // If there are no errors, redirect the user to a success page
    if (!isset($nameError) &&!isset($emailError) &&!isset($genderError) &&!isset($hobbiesError)) {
        header("Location: success.php");
        exit;
    }

}
?>
</body>
</html>