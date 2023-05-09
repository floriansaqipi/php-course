<?php 
class Car{    
    public $wheels = 4;
    protected $hood = 1;
    private $engine = 1;
    var $doors = 4;

    function getEngine(){
        return $this->engine;
    }

   
}

$bmw = new Car();
echo $bmw->getEngine();
$semi = new Semi();
echo $semi->getHood();   
// echo $semi->getEngine();

class Semi extends Car{
    function getHood()
    {
        return $this->hood;
    }
    
}

// echo $bmw->wheels;
// echo $bmw->hood;
// echo $bmw->getHood();
?>