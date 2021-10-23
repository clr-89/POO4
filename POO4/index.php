<?php

    require_once 'Bicycle.php';
    require_once 'Car.php';
    require_once 'Truck.php';
    require_once 'HighWay.php';
    require_once 'PedestrianWay.php';
    require_once 'ResidentialWay.php';
    require_once 'MotorWay.php';


    $truck = new Truck(250,0,'yellow',3);


    //echo $truck->forward();
    //echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
    //echo $truck->brake();
    //echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
    //echo $truck->fullOrInFilling();

    $bicycle = new Bicycle('blue', 1);

    $car = new Car('green', 4, 'electric');
    $Vehicle = new Vehicle('blue', 4);
    $tesla = new Car('black', 4, 'electric');
    $ferrari = new Car('red', 2, 'electric');

    $motorWay = new MotorWay();
    $motorWay->addVehicle($car);
    $motorWay->addVehicle($tesla);

    $pedestrianWay = new PedestrianWay();
    $pedestrianWay->addVehicle($bicycle);

    try {
        $car->start();
    } catch (Exception $e) {
        $car->setHasParkBrake(false);
    }finally {
        echo "Ma voiture roule comme un donut";
    }

