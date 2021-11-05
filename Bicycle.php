<?php
require_once 'Vehicle.php';
class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn()
    {
        return $this->currentSpeed > 10;
    }

    public function switchOff()
    {
        return false;
    }
}
