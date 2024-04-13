<?php

$cookie_name="Swarnim";
$cookie_value="swar0129";

// setIt($cookie_name,$cookie_value);
// modify($cookie_name);
deleteCookie($cookie_name,$cookie_value);

function setIt($cookie_name,$cookie_value){
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");

if(isset($_COOKIE[$cookie_name])){
    echo "cookie set";
}
}

function modify($cookie_name){
    $cookie_value="RohitSharma";
    setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
    if(isset($_COOKIE[$cookie_name])){
        echo "cookie updated";
    }
    else{
        echo "not updated";
    }
}

function deleteCookie($cookie_name,$cookie_value){
    setcookie($cookie_name,$cookie_value,time()-(3600),"/");
    echo "Cookie deleted";
}

?>