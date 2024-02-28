<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="php_self"></form>
    <input type="text" name="num1" placeholder="num1">
    <br>
    <input type="text" name="num2" placeholder="num2">
    <br>
    <div>
        <?php  ?>
    </div>
</body>
</html>

<?php
$num1 = 12; 
$num2 = 13;
echo $num1 + $num2;
?>