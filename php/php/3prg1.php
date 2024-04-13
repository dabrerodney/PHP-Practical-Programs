<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    echo "Using for loop: <br>";
    for ($i = 2; $i <= 60; $i += 2) {
        echo $i . "<br>";
    }


    echo "Using while loop: <br>";
    $i = 2;
    while ($i <= 60) {
        echo $i . "<br>";
        $i += 2;
    }

    echo "Using do-while loop: <br>";
    $i = 2;
    do {
        echo $i . "<br>";
        $i += 2;
    } while ($i <= 60);

    ?>

</body>

</html>