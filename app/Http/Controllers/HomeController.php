<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
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
        return redirect()->route('swap');
    }

    public function showResult(Request $request)
    {
        // Retrieve the search data from the session
        $flightSearch = $request->session()->get('index');

        $results = []; // Replace this with the results of your search query

        return view('swap', ['results' => $results]);
    }

}
