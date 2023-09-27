<?php

class ReservoirTank {
    private $availableFuel;

    public function __construct($initialFuel = 0.0) {
        $this->availableFuel = $initialFuel;
    }

    public function getAvailableFuel() {
        return $this->availableFuel;
    }

    public function addFuel($amount) {
        if ($amount > 0) {
            $this->availableFuel += $amount;
        }
    }

    public function useFuel($amount) {
        if ($amount > 0 && $this->availableFuel >= $amount) {
            $this->availableFuel -= $amount;
        } else {
            echo "Pas assez d'essence dans le réservoir.\n";
        }
    }
}

class Car {
    private $reservoir;
    private $model;
    private $fuelConsumptionPerMeter;

    public function __construct($model, $initialFuel = 0.0, $fuelConsumptionPerMeter = 0.05) {
        $this->reservoir = new ReservoirTank($initialFuel);
        $this->model = $model;
        $this->fuelConsumptionPerMeter = $fuelConsumptionPerMeter;
    }

    public function getModel() {
        return $this->model;
    }

    public function getAvailableFuel() {
        return $this->reservoir->getAvailableFuel();
    }

    public function addFuelToTank($amount) {
        $this->reservoir->addFuel($amount);
    }

    public function drive($distanceInMeters) {
        $fuelConsumed = ($distanceInMeters / 1000) * $this->fuelConsumptionPerMeter;
        $this->reservoir->useFuel($fuelConsumed);
    }
}


$car1 = new Car("Toyota corolla", 20.0);

echo "Modèle de car1 : " . $car1->getModel() . "\n";
echo "dispo réservoir de car1 : " . $car1->getAvailableFuel() . " litres\n";


$car1->addFuelToTank(10.0);


echo " réservoir de car1 : " . $car1->getAvailableFuel() . " litres\n";


$distanceInMeters = 5000;
$car1->drive($distanceInMeters);


echo " réservoir de car1  : " . $car1->getAvailableFuel() . " litres\n";
?>

