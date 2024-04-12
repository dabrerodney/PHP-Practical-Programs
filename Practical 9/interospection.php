<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class employee{
            public $name = "Rahul";
            public $age = 25;
        }

        $obj = new employee();
        var_dump(class_exists("employee"));
        print_r(get_class_vars("employee"));
        echo get_class($obj);
        var_dump(is_object($obj))
    ?>
</body>
</html>