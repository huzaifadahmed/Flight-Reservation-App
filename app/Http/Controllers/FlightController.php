<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Http\Requests\SearchFlightRequest;
use App\FlightAction\FlightAction;

class FlightController extends Controller
{
    public function show()
    {
        return view('bookflight');
    }

    public function index(SearchFlightRequest $request)
    {
        $validated = $request->validated();

        $flights = FlightAction::SearchFlightsAction($validated);

        return view('search',[
            'flights'=>$flights
        ]);
    }

    public function create(Flight $flight)
    {
        return view('flight',[
            'flight'=>$flight
        ]);
    }


    
}
