<?php

class MileageCalculator{
    public $pricePerFuelLitre;
    public $distance;
    public $totalFuelPrice;

    public function calculateKM(){
        $totalFuel = $this->totalFuelPrice / $this->pricePerFuelLitre;
        $mileage = $this->distance / $totalFuel;
        echo "Your total fuel is {$totalFuel} litres, and your mileage is {$mileage} KM. \n";
    }
}

$motorCycle = new MileageCalculator();
$motorCycle->pricePerFuelLitre = 122;
$motorCycle->distance = 30;
$motorCycle->totalFuelPrice = 400;

$motorCycle->calculateKM();
echo "\n";

$car = new mileageCalculator();
$car->pricePerFuelLitre = 122;
$car->distance = 200;
$car->totalFuelPrice = 1000;

$car->calculateKM();
echo "\n";

$bus = new MileageCalculator();
$bus->pricePerFuelLitre = 112;
$bus->distance = 400;
$bus->totalFuelPrice = 1500;

$bus->calculateKM();