<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="email" id="e">
    <input type="submit" value="submit" name="submit">

</form>

<?php 
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pattern="/^\S+@\S+\.\S+$/";
    if(preg_match($pattern,$email)){
        echo "valid";
    }
    else{
        echo "invalid";
    }
}
?>
</body>
</html>