<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\PassengerConfirmRequest;
use App\CustomClasses\ConfirmPassengerReservation;

class PassengerController extends Controller
{
    public function index()
    {
        return view('confirmreservation');
    }

    public function show(PassengerConfirmRequest $request)
    {
        $validated = $request->validated();

        $passenger = ConfirmPassengerReservation::ConfirmPassengerReservation($validated);

        if(!$passenger){
            return back()->withErrors(["lastName" => "A valid reservation could not be found."])->withInput();
        }

        return view('showreservation',[
            'passenger'=>$passenger
        ]);



    }
}
