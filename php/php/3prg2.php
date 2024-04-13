<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // Print whether each number from 1 to 10 is even or odd
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo "$i is even.<br>";
        } else {
            echo "$i is odd.<br>";
        }
    }

    ?>


</body>

</html>