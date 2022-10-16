<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passenger;
use App\Models\Flight;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReserveSeat;

class StripeController extends Controller
{
    // https://www.youtube.com/watch?v=gkc1GcBKh1M&ab_channel=RossEdlin

    //once payment is processed, user is stored in database and seat is reserved
    public function checkout()
    {
        $attributes=request()->validate([
            'flightNumber'=>'required',
            'firstName'=>'required',
            'lastName'=>'required|unique:passengers,lastName',
            'email'=>'required|email|unique:passengers,email',        
        ]);


        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $flight = Flight::where('flightNumber',$attributes['flightNumber'])->first();

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'cad',
                        'product_data' => [
                            'name' => 'Airline Ticket For Flight '.$flight->flightNumber.'. '.$flight->departure.' to '.$flight->arrival,
                        ],
                        'unit_amount'  => $flight->price*100,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('reservationsearch'),

        ]);

        return redirect()->away($session->url)->with([
            'attributes'=>$attributes,
            'flight'=>$flight
        ]);
    }

    public function success()
    {
        $attributes=session()->get('attributes');
        $flight=session()->get('flight');

        //Count number of passengers on the flight
        $passengersCount = Passenger::where(['flight_id'=>$flight->id])->count();

        //check if flight is full or not
        if($passengersCount >= 132){
            return back()->withErrors(["flightNumber" => "There are no more seats availible on this flight."]);
        }

        Passenger::create([
            'flight_id'=>$flight->id,
            'email'=>$attributes['email'],
            'firstName'=>$attributes['firstName'],
            'lastName'=>$attributes['lastName'],
        ]);

        Flight::where(['id'=>$flight->id])->update(['passengersCount'=>$passengersCount + 1]);

        session()->flash('success', 'Your seat has been successfully reserved!');

        Mail::to($attributes['email'])->send(new ReserveSeat($attributes, $flight));

        return redirect('/');


    }
}
