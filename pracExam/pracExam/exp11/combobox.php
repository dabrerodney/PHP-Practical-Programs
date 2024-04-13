<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <select name="food[]" id="ab">
        <option value="mango">mango</option>
        <option value="Apple">Apple</option>
        <option value="orange">orange</option>
        <option value="banana">banana</option>
    </select>

    <input type="submit" name="submit" value="submit">
    </form>

    <?php

    if(isset($_POST['submit'])){
        $food=$_POST['food'];
        foreach($food as $a){
            echo $a;
        }
    }
    ?>
</body>
</html>