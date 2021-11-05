<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;
    protected $maxSpeed = 10;

    public function addVehicule(Vehicule $vehicule)
    {
        if ($vehicule instanceof Bike || $vehicule instanceof Skateboard) {
            $this->currentVehicles[] = $vehicule;
        }
    }
}
