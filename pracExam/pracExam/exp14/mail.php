<?php

//this file cannot run 
$to="xyz@gmail.com";
$subject="practical exam ";
$body="i sm present today";
$header="from:Swarnim";

if(mail($to,$subject,$body,$header)){
    echo "email sent";

}
else{
    echo "nai hoga bhai rehne de";
}
?>