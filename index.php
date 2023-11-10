<?php
include("Car.php");
include("Train.php");

echo"HI ";

$myCar = new Car("Dacia");
$myTrain = new Train("Skoda");
// $myCar2 = new Car("Apple Car");
Car::makeNoise();
Train::makeNoise();

$myCar->makeNoise();
echo $myTrain->getMilage();
echo"<br>";

?>