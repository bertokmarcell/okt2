<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Http\Requests\StoreFlightRequest;
use App\Http\Requests\UpdateFlightRequest;
class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        return Flight::all();
    }
    public function create()
    {      //
    }  
    public function show(Flight $flight){
        return Flight::find($flight);
    }
    public function edit(Flight $flight)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFlightRequest $request, Flight $flight)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flight $flight)
    {
        //
    }
}
