<?php 
class Car{    
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;
    function moveWheels(){
       $this->wheels = 10;
    }

    function setDoors(){
        $this->doors = 6;
    }
}

$bmw = new Car();
$truck = new Car();

echo $bmw->wheels . "<br>";
echo $truck->wheels = 10 . "<br>";

$truck->setDoors();
echo $truck->doors;

// $bmw->moveWheels();
// echo $bmw->wheels;
// $bmw->wheels = 8;
// echo $bmw->wheels;





?>