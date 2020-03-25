<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels')->with('hotels', $hotels);
    }//end index

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Hotel $hotel)
    {

    }

    public function edit(Hotel $hotel)
    {

    }

    public function update(Request $request, Hotel $hotel)
    {

    }

    public function destroy(Hotel $hoetl)
    {
        
    }
}
