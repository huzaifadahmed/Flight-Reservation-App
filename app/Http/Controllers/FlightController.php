<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use DateTime;
use Carbon\Carbon;

class FlightController extends Controller
{
    //shows the user all the availible flights based on their search criteria
    public function index()
    {
        $attributes=request()->validate([
            'from'=>'required',
            'to'=>'required|different:from',
            'fromDate'=>'required',
            'toDate'=>'required|after:fromDate',
    
        ]);

        $flights = Flight::all()
        ->where('departure','=',request()->from)
        ->where('arrival','=',request()->to)
        ->whereBetween('date',[request()->fromDate,request()->toDate]);

        //--------Dynamic ticket pricing based on when the seat is being reserved from the flight date
        $today=Carbon::now();
        foreach($flights as $flight){
            $difference = $today->diffInDays($flight->date);

            if($difference == 0){
                $difference = 1;
            }

            $factor = (1/$difference) + 1;
            $flight->update(['price'=>round($flight->basePrice*$factor)]);
        }
        //------------------------

        return view('search',[
            'flights'=>$flights
        ]);
    }

    //shows the user a single flight which they can then proceed to reserve a seat
    public function show(Flight $id)
    {
        return view('flight',[
            'flight'=>$id
        ]);
    }
    
}
