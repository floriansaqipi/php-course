<?php

$file = "example.txt";

if($handle = fopen($file, 'r')){

echo $content = fread($handle, 2); //Each byte is a character
echo $content = fread($handle, filesize($file)); //Each byte is a character

    fclose($handle);
}else {
    echo "The files couldn t be written";
}



?>