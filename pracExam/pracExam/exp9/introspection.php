<?php
class abc{
    public $a=10;
    public $b=20;

    function abcde(){
        print("hello ");
    }
}

$obj=new abc();
$cs=get_class_vars('abc');
print_r($cs);
echo "<br>";
$ds=get_class($obj);
print($ds);
echo "<br>";

$fs=get_class_methods('abc');
print_r($fs);
echo "<br>";

$isC=is_object($obj);
print($isC);
echo "<br>";

print(method_exists($obj,'abcde'));
print_r(get_declared_classes());



?>

