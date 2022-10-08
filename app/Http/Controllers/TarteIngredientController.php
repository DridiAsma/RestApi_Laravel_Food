<?php

namespace App\Http\Controllers;

use App\Models\TarteIngredient;
use App\Http\Requests\StoreTarteIngredientRequest;
use App\Http\Requests\UpdateTarteIngredientRequest;

class TarteIngredientController extends Controller
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
     * @param  \App\Http\Requests\StoreTarteIngredientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTarteIngredientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TarteIngredient  $tarteIngredient
     * @return \Illuminate\Http\Response
     */
    public function show(TarteIngredient $tarteIngredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TarteIngredient  $tarteIngredient
     * @return \Illuminate\Http\Response
     */
    public function edit(TarteIngredient $tarteIngredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTarteIngredientRequest  $request
     * @param  \App\Models\TarteIngredient  $tarteIngredient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTarteIngredientRequest $request, TarteIngredient $tarteIngredient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TarteIngredient  $tarteIngredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(TarteIngredient $tarteIngredient)
    {
        //
    }
}
