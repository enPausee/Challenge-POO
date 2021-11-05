<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;
    protected $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}
