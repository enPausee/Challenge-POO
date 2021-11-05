<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    private string $energy = "";

    private bool $hasParkBrake = false;

    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
    
    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function start():void
    {
        if ($this->hasParkBrake) {
            throw new LogicException("Frein à main activé");
        }
        $this->currentSpeed = 0;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, parent::ALLOWED_ENERGIES)) {
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
}
