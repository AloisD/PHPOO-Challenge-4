<?php
// index.php

//require_once 'Bicycle.php';
require_once 'Car.php';
//require_once 'Truck.php';
//require_once 'MotorWay.php';
//require_once 'PedestrianWay.php';
//require_once 'ResidentialWay.php';

const BR = '<br> <br> <br>';

//$bike = new Bicycle('red',1);
$bugatti = new Car('blue', 1, 'pedals');
//$kammthaar = new Truck('white', 3, 'fuel', 10);
//$marcel = new Truck('France3', 5, 'fuel', 2);



//$bugatti->setParkBrake();

try {
    $bugatti ->start();
} catch (Exception $e) {
    echo $e->getMessage();
    $bugatti->setParkBrake();
} finally {
    echo " Ma voiture roule comme un donut";
}
