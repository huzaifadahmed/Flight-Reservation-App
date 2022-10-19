<?php
namespace App\CustomClasses;
use Carbon\Carbon;

class DynamicFlightPrice
{
    //Dynamic ticket pricing based on when the seat is being reserved from the flight date
    public static function DynamicFlightPrice($flights)
    {
        $today=Carbon::now();

        foreach($flights as $flight){
            $difference = $today->diffInDays($flight->date);

            //So that we dont have a 0 denominator in the factor formula
            if($difference == 0){
                $difference = 1;
            }

            $factor = (1/$difference) + 1;
            $flight->update(['price'=>round($flight->basePrice*$factor)]);
        }
    }
}