<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\Passenger;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class PassengerController extends Controller
{
    // public function store(Flight $flight)
    // {
    //     $attributes=request()->validate([
    //         'flightId'=>'required',
    //         'firstName'=>'required',
    //         'lastName'=>'required',    
    //     ]);

    //     Passenger::create([
    //         'flight_id'=>$attributes['flightId'],
    //         'firstName'=>$attributes['firstName'],
    //         'lastName'=>$attributes['lastName'],
    //     ]);

    //     session()->flash('success', 'Your seat has for flight been successfully reserved!');
    //     return redirect('/');
    // }

    public function index()
    {
        return view('confirmreservation');
    }

    public function show()
    {
        $attributes=request()->validate([
            'lastName'=>'required',
            'flightNumber'=>'required',
        ]);
        //validation using queries to check if the reservation exists
        $checkName = DB::table('passengers')->where('lastName',$attributes['lastName'])->first();

        if($checkName){

            $checkNumber = DB::table('flights')->where('flightNumber',$attributes['flightNumber'])->first();

            if($checkNumber)
            {
                if($checkName->flight_id == $checkNumber->id)
                {
                    return view('showreservation',[
                        'passenger'=>Passenger::where('lastName',$attributes['lastName'])->first()
                    ]);
                }

                else
                {
                    return back()->withErrors(["lastName" => "A valid reservation could not be found."])->withInput();

                }
            }

            else{
                return back()->withErrors(["flightNumber" => "The Flight Number could not be found for this name."])->withInput();
            }
        }

        else{
            return back()->withErrors(["lastName" => "A reservation under that name could not be found."])->withInput();
        }


    }
}
