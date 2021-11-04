<?php

class Truck extends Vehicle
{
    private int $storageCapacity;
    private int $load = 0;
    private string $energy;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->storageCapacity = $storageCapacity;
        $this->energy = $energy;
    }

    public function setLoad($load): void
    {
        $this->load = $load;
    }

    public function getLoad(): int
    {
        return $this->load;
    }

    public function setStorageCapacity($storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }


    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setEnergy($energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getRemainingStorage(): int
    {
        return $this->storageCapacity - $this->load;
    }

    public function isFull(): string
    {
        if($this->load == $this->storageCapacity) {
            return 'full';
        }
        else {
            return 'in filling';
        }
    }
}