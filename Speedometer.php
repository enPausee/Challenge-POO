<?php

class Speedometer
{
    public static function convertKmToMiles($km): float
    {
        return $km * 0.621371;
    }

    public static function convertMilesToKm($miles): float
    {
        return $miles * 1.60934;
    }
}

echo Speedometer::convertMilesToKm(10) . PHP_EOL;
