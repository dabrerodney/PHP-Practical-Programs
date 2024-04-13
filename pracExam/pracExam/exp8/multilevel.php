<?php

class p{
    public $a=10;
    public $b=20;

}
class c1 extends p{
    public $c=30;

}

class c2 extends c1{
    function add(){
    $this->d=$this->a+$this->b+$this->c;
    echo $this->d;
    }
}

$obj=new c2();
$obj->add();

?>