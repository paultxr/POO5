<?php

require_once 'Highway.php';

final class ResidentialWay extends Highway {
    public function __construct(){
        $this->nbLane = 2;
        $this->maxSpeed = 50;
    }

    public function addVehicle(object $vehicle)
    {
        $currentVehicles =[];
        if ($vehicle instanceof Car || $vehicle instanceof Bicycle || $vehicle instanceof Truck || $vehicle instanceof Skateboard ){
            $this->currentVehicles[] = array_push($currentVehicles, $vehicle);
        }
    }
};
