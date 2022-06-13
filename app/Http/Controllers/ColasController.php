<?php

namespace App\Http\Controllers;

use App\Models\Colas;
use App\Http\Requests\StoreColasRequest;
use App\Http\Requests\UpdateColasRequest;

class ColasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreColasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreColasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Colas  $colas
     * @return \Illuminate\Http\Response
     */
    public function show(Colas $colas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Colas  $colas
     * @return \Illuminate\Http\Response
     */
    public function edit(Colas $colas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateColasRequest  $request
     * @param  \App\Models\Colas  $colas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateColasRequest $request, Colas $colas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Colas  $colas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colas $colas)
    {
        //
    }
}
