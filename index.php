<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle('blue');

$bike->setCurrentSpeed(0);
$bike->getCurrentSpeed();

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake() . '<br><br>';


$car = new Car('blue', 5, 'Water');

echo $car->start();
echo $car->forward();
echo '<br> Vitesse de la Twingo : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la Twingo  : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();

