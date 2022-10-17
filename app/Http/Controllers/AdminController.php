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
        // TODO: replace all in-line validations with dedicated Request classes.
        // This is especially useful when working with teams, or when your project
        // has both a web and mobile component.
        // https://laravel.com/docs/9.x/validation#form-request-validation

        // TODO: try to use array based validation rules instead of strings
        // e.g. 'departure' => ['required', 'different:arrival].
        $attributes = request()->validate([
            'departure'=>'required|different:arrival',
            'arrival'=>'required',
            'basePrice'=>'required',
            'date'=>'required|after:today',
            'aircraft'=>['required', new AircraftRule()],
        ]);

        // TODO: this is too complicated.
        // Try to offload this to a separate method
        // Alternatively, you can just create a random string
        // using Str::random(6) or something similar from Laravel.
        //generate unique flightnumber
        $flightNumber=substr($attributes['departure'],0,2).substr($attributes['arrival'],0,2).substr($attributes['date'],5,5).substr($attributes['aircraft'],9,1);

        // TODO: this entire thing is repetitive,
        // Once you get the validated data from your request class, you can use
        // array_merge() to add in any other attributes, or you can add them in
        // within the request class itself.
        // Check docs here: https://laravel.com/docs/9.x/validation#form-request-validation
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

        // TODO: as a pattern, your controllers should contain as little business logic
        // as possible.
        // Their main job is to be the glue between your Request layer, and your business
        // logic layer.
        // You can use the Action class pattern and offload business logic to these dedicated classes.
        // For example, you can have a CreateFlightAction() class that receives validated input,
        // and creates and returns the class.
        // TODO: This way, your controller is just calling this dedicated class.
        // reference: laravelactions.com (also google the Action class pattern).
        Flight::create($attributes);
        return redirect('/')->with('success', 'Flight has been successfully created!');
    }
}
