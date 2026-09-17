<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> php with two parameter</h2>
    <?php
        function addFunction($num1, $num2) {
            $sum = $num1 +$num2;
            echo "sum of the two number : $sum";
        }

        addFunction(10,30);
    ?>
</body>
</html>