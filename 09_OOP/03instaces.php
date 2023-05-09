<?php 
class Car{    
    function moveWheels(){
        echo "Wheels move";
    }
}

$bmw = new Car();
$mercedes_benz = new Car();

$bmw->moveWheels();
$mercedes_benz->moveWheels();
$bmw->moveWheels();





?>