<?php

namespace App\Http\Controllers;

use App\Models\Tarte;
use App\Http\Requests\StoreTarteRequest;
use App\Http\Requests\UpdateTarteRequest;

class TarteController extends Controller
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
     * @param  \App\Http\Requests\StoreTarteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTarteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarte  $tarte
     * @return \Illuminate\Http\Response
     */
    public function show(Tarte $tarte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarte  $tarte
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarte $tarte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTarteRequest  $request
     * @param  \App\Models\Tarte  $tarte
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTarteRequest $request, Tarte $tarte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarte  $tarte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarte $tarte)
    {
        //
    }
}
