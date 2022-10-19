<?php
namespace App\CustomClasses;

class RandomFlightNumber
{
    public static function RandomFlightNumber($validated)
    {
        $flightNumber=substr($validated['departure'],0,2).substr($validated['arrival'],0,2).substr($validated['date'],5,5).substr($validated['aircraft'],9,1);
        return $flightNumber;
    }
}