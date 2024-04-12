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
        public $name;
        public $age;

        public function __construct($name, $age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        public function displayInfo()
        {
            echo "Name: " . $this->name . ", Age: " . $this->age . "\n";
        }
    }

    $person1 = new Person("John", 30);
    $person2 = new Person("Alice", 25);

    $person1->displayInfo(); // Output: Name: John, Age: 30
    $person2->displayInfo(); // Output: Name: Alice, Age: 25

    ?>

</body>

</html>