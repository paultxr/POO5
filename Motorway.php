<?php

require_once 'Highway.php';

final class Motorway extends Highway {

    public function __construct(){
        $this->nbLane = 4;
        $this->maxSpeed = 130;
    }

    public function addVehicle(object $vehicle)
{
    $currentVehicles =[];
    if ($vehicle instanceof Car){
        $this->currentVehicles[] = array_push($currentVehicles, $vehicle);
    }
}

};