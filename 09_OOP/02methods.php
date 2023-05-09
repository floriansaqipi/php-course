<?php 

class Car{

    function moveWheels(){
        echo "Wheels move";
    }
}

if(method_exists("Car","moveWheels")){
    echo "method exists";
} else {
    echo "method doesn t exist";
}

?>