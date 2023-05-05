<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<script>
    x = 10;
    function doX(){
        x = 20;
    }
    console.log(x);
    doX();
    console.log(x);
    
</script>
    
</body>
</html>

<?php
$x = "outside";

function convert(){
    global $x; 
    $x = "inside";
}

echo $x;
echo "<br>";
convert();
echo $x;

?>