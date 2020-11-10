<?php

// Bicycle.php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{

    public function switchOn(): int
    {
        if (getCurrentSpeed() > 10) {
            return true;
        } else {
            return false;
        }
    }

    public function switchOff(): int
    {
        return false;
    }

}