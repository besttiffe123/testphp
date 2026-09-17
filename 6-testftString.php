<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic function Calls</title>
</head>
<body>
    <?php
        function sayHello(){
            echo "Hello Com Sci <br />";
        }
        $function_holder = "sayHello";
        $function_holder();
    ?>
</body>
</html>