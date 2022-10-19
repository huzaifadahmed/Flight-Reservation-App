<?php
namespace App\PassengerAction;
use App\Models\Passenger;
use App\Models\Flight;

class PassengerAction
{
    public static function CountPassengers($flight)
    {
        $passengersCount = Passenger::where(['flight_id'=>$flight->id])->count();

        return $passengersCount;
    }

    public static function CreatePassenger($validated,$flight)
    {
        Passenger::create([
            'flight_id'=>$flight->id,
            'email'=>$validated['email'],
            'firstName'=>$validated['firstName'],
            'lastName'=>$validated['lastName'],
        ]);

        $passengersCount = PassengerAction::CountPassengers($flight);

        Flight::where(['id'=>$flight->id])->update(['passengersCount'=>$passengersCount + 1]);

    }
}