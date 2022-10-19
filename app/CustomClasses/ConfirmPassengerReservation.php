<?php
namespace App\CustomClasses;
use App\Models\Passenger;

class ConfirmPassengerReservation
{
    public static function ConfirmPassengerReservation($validated)
    {
        $passenger = Passenger::query()
        ->whereRelation('flight','flightNumber','=',$validated['flightNumber'])
        ->where('lastName',$validated['lastName'])
        ->first();

        return $passenger;

        
    }
}