<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\AircraftRule;
use App\Models\Flight;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function create()
    {
        $attributes = request()->validate([
            'departure'=>'required|different:arrival',
            'arrival'=>'required',
            'basePrice'=>'required',
            'date'=>'required|after:today',
            'aircraft'=>['required', new AircraftRule()],
        ]);

        //generate unique flightnumber
        $flightNumber=substr($attributes['departure'],0,2).substr($attributes['arrival'],0,2).substr($attributes['date'],5,5).substr($attributes['aircraft'],9,1);

        $attributes=[
            'departure'=>$attributes['departure'],
            'arrival'=>$attributes['arrival'],
            'passengersCount'=>'0',
            'basePrice'=>$attributes['basePrice'],
            'price'=>$attributes['basePrice'],
            'date'=>$attributes['date'],
            'aircraft'=>$attributes['aircraft'],
            'flightNumber'=>$flightNumber
        ];

        Flight::create($attributes);
        return redirect('/')->with('success', 'Flight has been successfully created!');
    }
}
