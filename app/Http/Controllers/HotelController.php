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

    public function create(Request $request)
    {
        return view('hotelform');
    }

    public function store(Request $request)
    {
        Hotel::create([‘field1’ => $request->input(‘form_field_1’), ‘field2’ => $request->input(‘form_field_2’)]);
        return redirect()->route('/hotels');
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
