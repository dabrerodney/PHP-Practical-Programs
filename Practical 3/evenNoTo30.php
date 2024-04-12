<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "Even numbers from 1 to 30 using for loop:\n";
    for ($i = 1; $i <= 30; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    echo "\n";

    echo "<br> Even numbers from 1 to 30 using while loop:\n";
    $j = 1;
    while ($j <= 30) {
        if ($j % 2 == 0) {
            echo $j . " ";
        }
        $j++;
    }
    echo "\n";

    echo "<br> Even numbers from 1 to 30 using do-while loop:\n";
    $k = 1;
    do {
        if ($k % 2 == 0) {
            echo $k . " ";
        }
        $k++;
    } while ($k <= 30);
    echo "\n";

    ?>

</body>

</html>