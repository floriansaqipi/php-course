<?php 

class Car{
    static $wheels = 3;
    const weight = 500;
    var $hood = 1;

    function moveWheels(){
        Car::$wheels = 10;
    }
}

$bmw = new Car();

// $bmw->wheels;

echo Car::$wheels;
echo $bmw->moveWheels();
echo Car::$wheels;
echo Car::weight;

?>