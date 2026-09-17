<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing Arugment by Referrence</title>
</head>
<body>
    /* Defining */
    <?php
        function addFive($num){
            $num += 5;
        }

        function addSix(&$num){
            $num += 6;
        }
/* Referrence */
        $orignum =10;
        addFive($orignum);

        echo "orignum Value is $orignum<br />";

        
        addSix($orignum);

        echo "orignum Value is $orignum<br />";

    ?>
</body>
</html>