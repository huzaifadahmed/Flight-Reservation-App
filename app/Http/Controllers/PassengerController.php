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
        // TODO: this entire method is wrong and repetitive.

        /**
         * 1. Move the validation to a form request class
         * 2. Move the business logic to an Action class
         * 3. Instead of three queries, you need to use relationships to fetch this data.
         * 4. Try using whereHas() or whereRelation().
         * 5. Familiarize yourself with fetching data through these relationships
         * 6. Try not to use nested-if statements.
         * 7. Try to avoid else statements. Use early returns instead (google this)
         * 8. If your method is becoming too long, break it up into smaller methods.
         */

        // This query will perform all the checks that you are currently doing with if conditions
        // and multiple queries.

//        $passenger = Passenger::query()
//            ->whereRelation('flight', 'flightNumber', '=', $flightNumber)
//            ->where('lastName', $lastName)
//            ->first();

        // Example of using an early return instead of an else.
        // Since if the `if condition` is not met, it will default to the
        // return statement after it.
//        if (! $passenger) {
//            return back()->withErrors();
//        }
//
//        return show('showreservation', [
//            'passeenger' => $passenger
//        ]);


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
