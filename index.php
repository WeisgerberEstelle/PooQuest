<?php
    require 'Bicycle.php';
    require 'Car.php';
    require 'Truck.php';

 
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);


$truck1= new Truck('darkblue', 2, 'electric', 500);
$truck1->setNbPackage(200);

var_dump($truck1->isFulled($truck1->getNbPackage()));

echo $truck1->forward();
echo '<br> Vitesse de truck1 : ' . $truck1->getCurrentSpeed() . "km/h" . "<br>";
echo  $truck1->brake();
echo  '<br> Vitesse de truck1 : ' . $truck1->getCurrentSpeed() . "km/h" . "<br>";

var_dump($truck1);

$truck2= new Truck('yellow', 3, 'fuel', 100);
$truck2->setNbPackage(100);

var_dump($truck2->isFulled($truck2->getNbPackage()));

echo $truck2->forward();
echo '<br> Vitesse de truck2 : ' . $truck2->getCurrentSpeed() . "km/h" . "<br>";
echo  $truck2->brake();
echo  '<br> Vitesse de truck2 : ' . $truck2->getCurrentSpeed() . "km/h" . "<br>";
var_dump($truck2);
