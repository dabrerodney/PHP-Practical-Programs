<?php
$conn = mysqli_connect('localhost', 'root', '', 'test');

if (!$conn) {
    die("Error in connecting: " . mysqli_connect_error());
} 
else{
    $upd="UPDATE stud set name='swar' where name='sahil';";
    if(mysqli_query($conn,$upd)){
        echo "data updated";
    }
}


?>