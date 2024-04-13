<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>

<h2>Registration Form</h2>

<form action="success.php" method="post">

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

</body>
</html>