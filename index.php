<?php

require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

$car = new Car('rose', 5, 'fuel');
$bike = new Bicycle('bleu', 2);
$truck = new Truck('vert', 6, 'electrique', 0);
var_dump($bike);
var_dump($car);
var_dump($truck);


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

echo "<br>";
echo "<br>";

echo $car->forward();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Ma voiture est : ' . $car->getColor() . ', avec ' . $car->getNbSeats() . ' places' . ' et roule de façon : '. $car->getEnergy();

echo "<br>";
echo "<br>";

echo $truck->forward();
echo '<br> Vitesse du camion: ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Mon camion est : ' . $truck->getColor() . ', avec ' . $truck->getNbSeats() . ' places' . ' , roule de façon : '. $truck->getEnergy() . ' et la capacité de stockage est : ' . $truck->getLoad() . ' Camion : ' . $truck->isFull();