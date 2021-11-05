<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    protected $nbLane = 4;
    protected $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}
