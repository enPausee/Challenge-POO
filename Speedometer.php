<?php

class Speedometer
{
    public static function convertKmToMiles($km)
    {
        return $km * 0.621371;
    }

    public static function convertMilesToKm($miles)
    {
        return $miles * 1.60934;
    }
}

echo Speedometer::convertKmToMiles(10) . PHP_EOL;
