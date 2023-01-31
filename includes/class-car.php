<?php

    class Car 
{
	// Only change code below this line
	private $make;
	private $model;
	private $year;

    public function setMake($make) {
        $this->make = $make;
    }

    public function getMake() {
        return $this->make;
    }
    public function setModel($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }
    public function setYear($year) {
        $this->year = $year;
    }

    public function getYear() {
        return $this->year;
    }



	// Only change code above this line
}

class Engine 
{
	// Only change code below this line
    private $horsepower;
    private $cylinders;

    public function setHorsepower($horsepower) {
        $this->horsepower = $horsepower;
    }

    public function getHorsepower() {
        return $this->horsepower;
    }

    public function setCylinders($cylinders) {
        $this->cylinders = $cylinders;
    }

    public function getCylinders() {
        return $this->cylinders;
    }

	// Only change code above this line
}


class CarEngine {
    private $car;
    private $engine;
    
    public function __construct(Car $car, Engine $engine) {
        $this->car = $car;
        $this->engine = $engine;
    }
    
    public function getCarEngine() {
		// Only change code below this line
        echo "Car: ".$this->car->getMake()." ".$this->car->getModel()." ".$this->car->getYear()
        ."<br>Engine: ".$this->engine->getHorsepower()."hp ".$this->engine->getCylinders()." cylinders";


		// Only change code above this line
    }
}

// instantiate Car object
$myCar = new Car();

// set the make, model, and year properties of the car object
$myCar->setMake("Toyota");
$myCar->setModel("Camry");
$myCar->setYear(2018);

// instantiate Engine object
$myEngine = new Engine();

// set the horsepower and cylinders properties of the engine object
$myEngine->setHorsepower(185);
$myEngine->setCylinders(4);

// instantiate CarEngine object
$myCarEngine = new CarEngine($myCar, $myEngine);

// call the getCarEngine() method of the CarEngine object
echo $myCarEngine->getCarEngine();
