<?php

class abc{
    function __construct($name,$roll){
        $this->name=$name;
        $this->roll=$roll;
    }

    function printData(){
        echo $this->name;
        echo $this->roll;
    }
}
$ob=new abc("swarnim",1802);
$ob->printData();


?>