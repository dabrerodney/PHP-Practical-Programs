<?php
//multiple inheritance dosent work in php so to implement it we can create a trait and use it and annother methid is to create and interface
//method1 by using trait
trait p1{
    function parent1(){
        echo "i am parent 1";

    }
}
trait p2{
    function parent2(){
        echo "i a parent 2";
    }
}

class child1{
    use p1;
    use p2;   
}

$obj=new child1();
$obj->parent1();
$obj->parent2();
?>



<?php
interface p11 {
    function parent1();
}

interface p22 {
    function parent2();
}

class child11 implements p11, p22 {
    public function parent1() {
        echo "I am parent 1";
    }

    public function parent2() {
        echo "I am parent 2";
    }
}

$obj = new child11();
echo "<br>";
// Call the methods through the class instance
$obj->parent1();
echo "<br>";
$obj->parent2();
?>

