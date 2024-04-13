<?php

$a='hello world';
echo strlen($a)."<br>";

//2)  count the number of words in a string without using the function

$arr=explode(" ",$a);
echo count($arr);
?>