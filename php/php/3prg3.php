<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    function b1($a) 
    {
      for ($i = 0; $i < $a; $i++) 
     {
    for ($j = 0; $j <=$i - 1; $j++) {
        echo " *";
    }
    echo "<br>";
    }
    }
    b1("10");

?>

</body>
</html> 