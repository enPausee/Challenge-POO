<?php
abstract class HighWay
{
    private $currentVehicles = [];
    private $nbLane;
    private $maxSpeed;

    abstract public function addVehicle(Vehicle $vehicle): void ;

    //getter

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    //setter

    protected function setNbLane($nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    protected function setMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    protected function setCurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }
}
