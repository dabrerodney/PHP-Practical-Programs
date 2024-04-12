<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class parentClass
    {
        function paren()
        {
            echo "This is parent class";
            echo "<br>";
        }
    }

    class parentClass2 extends parentClass
    {
        function paren1()
        {
            echo "This is Intermediate class";
            echo "<br>";
        }
    }

    class child extends parentClass2
    {
        function child()
        {
            echo "This is Child class";
            echo "<br>";
        }
    }

    $obj = new child();
    $obj->child();
    $obj->paren1();
    $obj->paren();

    ?>
</body>

</html>