<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\StripeRequest;
use App\StripeAction\StripeAction;
use App\FlightAction\FlightAction;
use App\PassengerAction\PassengerAction;
use App\MailAction\MailAction;


class StripeController extends Controller
{
    // https://www.youtube.com/watch?v=gkc1GcBKh1M&ab_channel=RossEdlin

    //once payment is processed, user is stored in database and seat is reserved
    public function checkout(StripeRequest $request)
    {
        $validated = $request->validated();

        $session = StripeAction::CreateStripeSession($validated);
        $flight = FlightAction::GetFlight($validated);

        return redirect()->away($session->url)->with([
            'validated'=>$validated,
            'flight'=>$flight
        ]);
    }

    public function success()
    {
        $validated=session()->get('validated');
        $flight=session()->get('flight');

        $passengersCount = PassengerAction::CountPassengers($flight);

        if($passengersCount >= 132){
            return back()->withErrors(["flightNumber" => "There are no more seats availible on this flight."]);
        }

        PassengerAction::CreatePassenger($validated,$flight);

        session()->flash('success', 'Your seat has been successfully reserved!');

        MailAction::SendMail($validated, $flight);

        return redirect('/');

    }
}
