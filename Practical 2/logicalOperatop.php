<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 20;
        if($a == 10 && $b == 20)
        {
            echo "True <br>";
        }else{
            echo "False <br>";
        }

        if($a == 10 || $b == 1)
        {
            echo "True";
        }else{
            echo "False";
        }
    ?>
</body>
</html>