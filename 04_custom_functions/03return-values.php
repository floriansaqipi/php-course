<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php 
function sum($num1, $num2){
    $sum = $num1 + $num2;
    return $sum;
}

$result = sum(4,2);

$result  = sum(100, $result);
echo $result;

?>