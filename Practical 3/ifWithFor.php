<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "Even numbers from 1 to 10 using if condition with for loop:\n";
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }

    ?>

</body>

</html>