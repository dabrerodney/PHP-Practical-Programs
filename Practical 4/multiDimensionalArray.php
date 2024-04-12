<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $marks = array(
            "Amar" => array("Physics" => 80),
            "Samar" => array("Maths" => 85),
            "Nazar" => array("Chemistry" => 90)
        );

        echo "Marks of Amar: ".$marks["Amar"]["Physics"];
        echo "<br> Marks of Samar: ".$marks["Samar"]["Maths"];
        echo "<br> Marks of Nazar: ".$marks["Nazar"]["Chemistry"];
    ?>
</body>
</html>