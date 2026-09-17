<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writing PhP Function which returns value</title>
</head>
<body>
    <?php
    function printMe($param = NULL) {
        print $param;
    }

    printMe("this is test");
    printMe();
    printMe("<br /> this is test");
    printMe();
    printMe();
    printMe();
    ?>
</body>
</html>