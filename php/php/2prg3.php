<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // Define the number to check
    $number = -10;

    // Check if the number is positive or negative
    if ($number > 0) {
        echo "The number $number is positive.";
    } elseif ($number < 0) {
        echo "The number $number is negative.";
    } else {
        echo "The number is zero, neither positive nor negative.";
    }

    ?>
</body>

</html>