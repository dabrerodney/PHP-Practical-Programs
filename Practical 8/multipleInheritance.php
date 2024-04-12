<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Fruits{
            function dispFruits(){
                echo "I am a fruit ";
            }
        }

        trait Taste{
            function dispTaste(){
                echo "My taste is sweet ";
            }
        }

        class Mango extends Fruits{
            use Taste; // Using the Taste trait in Mango class
            function dispMango(){
                echo "I am a Mango ";
            }
        }

        $obj = new Mango();
        $obj -> dispFruits(); // Output: I am a fruit
        $obj -> dispMango(); // Output: I am a Mango
        $obj -> dispTaste(); // Output: My taste is sweet
    ?>
</body>
</html>
