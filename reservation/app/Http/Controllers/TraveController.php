<?php

namespace App\Http\Controllers;

use App\Models\Trave;
use App\Http\Requests\StoreTraveRequest;
use App\Http\Requests\UpdateTraveRequest;

class TraveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Trave::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTraveRequest $request)
    {
        Trave::create($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Trave $trave)
    {
        return Trave::find($trave);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trave $trave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTraveRequest $request, Trave $trave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trave $trave)
    {
        //
    }
}
