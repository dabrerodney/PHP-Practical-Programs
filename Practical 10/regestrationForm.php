<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="process_form.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br><br>

        <label for="hobbies">Hobbies:</label><br>
        <input type="checkbox" id="reading" name="hobbies[]" value="reading">
        <label for="reading">Reading</label>
        <input type="checkbox" id="music" name="hobbies[]" value="music">
        <label for="music">Music</label>
        <input type="checkbox" id="sports" name="hobbies[]" value="sports">
        <label for="sports">Sports</label><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
