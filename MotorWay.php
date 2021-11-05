<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    protected $nbLane = 4;
    protected $maxSpeed = 130;

    public function addVehicule(Vehicule $vehicule)
    {
        if ($vehicule instanceof Car || $vehicule instanceof Truck) {
            $this->currentVehicles[] = $vehicule;
        }
    }
}
