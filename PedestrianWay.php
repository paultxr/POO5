<?php

require_once 'Highway.php';

final class PedestrianWay extends Highway {
    public function __construct(){
        $this->nbLane = 1;
        $this->maxSpeed = 10;
    }

    public function addVehicle(object $vehicle)
    {
        $currentVehicles =[];
        if ($$vehicle instanceof Bicycle || $vehicle instanceof Skateboard ){
            $this->currentVehicles[] = array_push($currentVehicles, $vehicle);
        }
    }
};