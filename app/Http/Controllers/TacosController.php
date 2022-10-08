<?php

namespace App\Http\Controllers;

use App\Models\Tacos;
use App\Http\Requests\StoreTacosRequest;
use App\Http\Requests\UpdateTacosRequest;

class TacosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Tacos::with('ingredientTacos')->get();
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
     * @param  \App\Http\Requests\StoreTacosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTacosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tacos  $tacos
     * @return \Illuminate\Http\Response
     */
    public function show(Tacos $tacos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tacos  $tacos
     * @return \Illuminate\Http\Response
     */
    public function edit(Tacos $tacos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTacosRequest  $request
     * @param  \App\Models\Tacos  $tacos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTacosRequest $request, Tacos $tacos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tacos  $tacos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tacos $tacos)
    {
        //
    }
}
