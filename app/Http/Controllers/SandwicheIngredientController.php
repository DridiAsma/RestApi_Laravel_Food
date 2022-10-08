<?php

namespace App\Http\Controllers;

use App\Models\SandwicheIngredient;
use App\Http\Requests\StoreSandwicheIngredientRequest;
use App\Http\Requests\UpdateSandwicheIngredientRequest;

class SandwicheIngredientController extends Controller
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
     * @param  \App\Http\Requests\StoreSandwicheIngredientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSandwicheIngredientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SandwicheIngredient  $sandwicheIngredient
     * @return \Illuminate\Http\Response
     */
    public function show(SandwicheIngredient $sandwicheIngredient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SandwicheIngredient  $sandwicheIngredient
     * @return \Illuminate\Http\Response
     */
    public function edit(SandwicheIngredient $sandwicheIngredient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSandwicheIngredientRequest  $request
     * @param  \App\Models\SandwicheIngredient  $sandwicheIngredient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSandwicheIngredientRequest $request, SandwicheIngredient $sandwicheIngredient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SandwicheIngredient  $sandwicheIngredient
     * @return \Illuminate\Http\Response
     */
    public function destroy(SandwicheIngredient $sandwicheIngredient)
    {
        //
    }
}
