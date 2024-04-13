<?php
session_start();

$color=$_SESSION['color'];
$player=$_SESSION['player'];
echo $color."<br>";
echo $player;
?>

