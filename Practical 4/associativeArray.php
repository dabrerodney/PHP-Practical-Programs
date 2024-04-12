<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $students = array(
        "John" => 20,
        "Alice" => 22,
        "Bob" => 21,
        "Emily" => 19,
        "David" => 20
    );

    echo "Age of John ".$students['John'];
    echo "<br> Age of Alice ".$students['Alice'];
    echo "<br> Age of Bob ".$students['Bob'];
    ?>

</body>

</html>