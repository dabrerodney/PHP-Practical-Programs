<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    class Person
    {
        public function __construct()
        {
            echo "Default constructor called\n";
        }

    }
    
    $person = new Person();

    ?>

</body>

</html>