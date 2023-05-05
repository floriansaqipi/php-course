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

$list = [2342,23423,234,242,2342];

echo max($list);

echo "<br>";

echo min($list);

echo "<br>";

sort($list);

rsort($list);

print_r($list);

$values = ["asdfasd","flori",123,33];

$found = in_array("flori",$values);

if($found){
    echo "we found flori";
}else {
    echo "we didn't find it";
}

?>