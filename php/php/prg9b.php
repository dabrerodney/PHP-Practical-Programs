<?php

class Person {
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function greet() {
        return "Hello, I'm ". $this->name;
    }
}
$person = new Person('John Doe', 30);

echo get_class($person). "\n";

foreach (get_class_methods($person) as $method) {
    echo $method. "\n";
}

?>