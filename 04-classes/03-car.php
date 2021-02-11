<?php

// Create a class that represents a car

require __DIR__ . "/vendor/autoload.php";

class Car 
{
    private $make; // create property 
    private $numberplate; // create property 
    private $mileage = 0; // create property 

    public function __construct ($make, $numberplate) // passing in make & plate (x2 paremters)
    {

    $this->make = $make; // storing the make property
    $this->numberplate = $numberplate; // storing the numberplate property 
    }

    // we can return the number plate property
    public function getNumberPlate()
    {
        return $this->numberplate; 
    }

    // we can return the make property
    public function getMake()
    {
        return $this->make;
    }
    
    // we can return the mileage property
    public function getMileage()
    {
        return $this->mileage;
    }



    public function addJourney($miles)

    {
    
        $this->mileage += $miles;

    }
}

// you pass in a make and number plate
$car = new Car("Ford", "XY11 4TY");

// you can get various bits of information about it
dump($car->getNumberplate()); // "XY11 4TY"
dump($car->getMake()); // "Ford"
dump($car->getMileage()); // 0

// you can add journey
$car->addJourney(100);
dump($car->getMileage()); // 100

$car->addJourney(200);
dump($car->getMileage()); // 300

