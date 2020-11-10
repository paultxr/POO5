<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

     /**
     * @var bool
     */
    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
    parent::__construct($color, $nbSeats);
    $this->setEnergy($energy);
    }


    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake(bool $hasParkBrake): bool
    {
       return $this->hasParkBrake = $hasParkBrake;
    
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
{
    if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
    }
    return $this;
}

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function start()
    {
        try {
           if ($this->hasParkBrake == true) {
            throw new Exception ('Park brake is on');}
        } catch (Exception $e) {
            echo $e->getMessage();
            return $this->setParkBrake(false);
        } finally {
            echo "Ma voiture roule comme un donut";
        }
    }

    public function switchOn(): bool
    {
       return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

}