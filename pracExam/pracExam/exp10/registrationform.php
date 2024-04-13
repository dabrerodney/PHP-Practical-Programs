<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Name: <input type="text" name="t1" id="t1"><br>
        Gender:<br>
        <input type="radio" name="gender" value="Male"> Male <br>
        <input type="radio" name="gender" value="Female"> Female <br>

        Languages:<br>                                      
        <input type="checkbox" name="languages[]" value="Marathi"> Marathi <br>
        <input type="checkbox" name="languages[]" value="Hindi"> Hindi <br>
        <input type="checkbox" name="languages[]" value="English"> English <br>

        <input type="submit" value="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['t1'];
        $gender = $_POST['gender'];
        $languages =$_POST['languages'];

        echo "Name: " . $name . "<br>";
        echo "Gender: " . $gender . "<br>";
        for($i=0;$i<sizeof($languages);$i++){
            echo "Languages: " . $languages[$i] . "<br>";
        }
    }

    
    ?>
</body>
</html>
