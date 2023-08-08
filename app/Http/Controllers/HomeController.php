<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showSearchForm(){
        return view('index');
    }
    public function swap(){
        return view('swap');
    }

    public function search(Request $request)
    {
        $flightNumber = $request->input('flight_number');
        $date = $request->input('date');
        $time = $request->input('time');

        // Store the search data in the session
        $request->session()->put('flight_search', [
            'flight_number' => $flightNumber,
            'date' => $date,
            'time' => $time,
        ]);

        // Redirect to the result page
        return redirect()->route('flight.result');
    }

    public function showResult(Request $request)
    {
        $flightSearch = $request->session()->get('flight.result');

        $results = [];

        return view('swap', ['results' => $results], compact('flightSearch'));
    }

}
