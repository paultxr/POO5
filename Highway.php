<?php
/*

Créer une classe abstraite HighWay possédant les propriétés suivantes :

currentVehicles (array),
nbLane (int) et
maxSpeed (int),
Créer les getters et setters correspondants au propriétés ci-dessus,

Faire hériter les classes finales

MotorWay (4 voies, 130km/h),
PedestrianWay (1 voie, 10km/h)et
ResidentialWay (2 voies, 50km/h).
Ajouter à la classe HighWay une méthode abstraite addVehicule() prenant en paramètre un objet de type Vehicle.

implémenter la méthode pour qu’elle ajoute le véhicule au tableau $currentVehicules, uniquement si ce dernier est autorisé sur ce type de voie. Ainsi, pour MotorWay, addVehicule($car) ajoutera bien une voiture au tableau, tandis que addVehicule($bike) ne le fera pas, car il n’est pas possible de rouler en vélo sur une autoroute. Les règles attendues sont les suivantes:

motorway : tout type de voiture
ResidentialWay : tout type de véhicule
PedestrianWay : Bike et Skateboard uniquement */

abstract class HighWay {
 
     /**
    * @var array
    */
    protected $currentVehicles;

     /**
    * @var int
    */
    protected $nbLane;

     /**
    * @var int
    */
    protected $maxSpeed;

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getNbLanes(): int
    {
        return $this->nbLanes;
    }

    public function setNbLanes(): void
    {
        $this->nbLanes = $nbLanes;
    }

    public function getMaxspeed(): int 
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(object $vehicle);

};