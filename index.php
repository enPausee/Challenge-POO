<?php

require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$car = new Car('rose', 5, 'fuel');
$truck = new Truck('vert', 6, 'electric', 0);
$motorWay = new MotorWay();
$pedestrianWay = new PedestrianWay();
$residentialWay = new ResidentialWay();

$motorWay->addVehicle($car);
var_dump($motorWay->getCurrentVehicles());
echo "<br>";

$pedestrianWay->addVehicle($car);
var_dump($pedestrianWay->getCurrentVehicles());
echo "<br>";

try {
    $car->start();
} catch (LogicException $e) {
    $car->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
}
