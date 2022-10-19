<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateFlightRequest;
use App\FlightAction\FlightAction;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function create(CreateFlightRequest $request)
    {

        $validated = $request->validated();

        FlightAction::CreateFlightAction($validated);

        return redirect('/')->with('success', 'Flight has been successfully created!');
    }
}
