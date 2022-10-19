<?php
namespace App\FlightAction;
use App\CustomClasses\RandomFlightNumber;
use App\Models\Flight;
use App\CustomClasses\DynamicFlightPrice;

class FlightAction
{
    public static function CreateFlightAction($validated)
    {

        $additionalValues =[
            'passengersCount'=>'0',
            'flightNumber'=>RandomFlightNumber::RandomFlightNumber($validated),
            'price'=>$validated['basePrice']
        ];

        $newFlight = array_merge($validated,$additionalValues);
        Flight::create($newFlight);

        return;

    }

    public static function SearchFlightsAction($validated)
    {
        $flights = Flight::all()
        ->where('departure','=',$validated['from'])
        ->where('arrival','=',$validated['to'])
        ->whereBetween('date',[$validated['fromDate'],$validated['toDate']]);

        DynamicFlightPrice::DynamicFlightPrice($flights);

        return $flights;
    }

    public static function GetFlight($validated)
    {
        $flight = Flight::where('flightNumber',$validated['flightNumber'])->first();
        
        return $flight;
    }


}