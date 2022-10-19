<?php
namespace App\StripeAction;
use App\Models\Flight;
use App\FlightAction\FlightAction;

class StripeAction
{
    public static function CreateStripeSession($validated)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $flight = FlightAction::GetFlight($validated);

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

        return $session;

    }

}