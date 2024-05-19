<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>This is html code block</h3>
    <?php
    echo 'This php block inside html';
    ?>
</body>
</html>

<?php

echo '<h1>Hello world!</h1>';

$number1 = 10;
$number2 = 20;

$result = $number1 + $number2;

echo 'The result is='.$result.'<br>';

for($i=0; $i<5; $i++){
    echo $i.'<br>';
}

?>