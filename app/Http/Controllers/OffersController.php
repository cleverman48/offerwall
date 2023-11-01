<?php

namespace App\Http\Controllers;

use App\Models\Offers;
use App\Http\Requests\StoreOffersRequest;
use App\Http\Requests\UpdateOffersRequest;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view( "offerwalls" );
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
    public function store(StoreOffersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Offers $offers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offers $offers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOffersRequest $request, Offers $offers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offers $offers)
    {
        //
    }
}
