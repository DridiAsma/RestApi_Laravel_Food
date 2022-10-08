<?php

namespace App\Http\Controllers;

use App\Models\PizzaIngrediant;
use App\Http\Requests\StorePizzaIngrediantRequest;
use App\Http\Requests\UpdatePizzaIngrediantRequest;

class PizzaIngrediantController extends Controller
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
     * @param  \App\Http\Requests\StorePizzaIngrediantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePizzaIngrediantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PizzaIngrediant  $pizzaIngrediant
     * @return \Illuminate\Http\Response
     */
    public function show(PizzaIngrediant $pizzaIngrediant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PizzaIngrediant  $pizzaIngrediant
     * @return \Illuminate\Http\Response
     */
    public function edit(PizzaIngrediant $pizzaIngrediant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePizzaIngrediantRequest  $request
     * @param  \App\Models\PizzaIngrediant  $pizzaIngrediant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePizzaIngrediantRequest $request, PizzaIngrediant $pizzaIngrediant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PizzaIngrediant  $pizzaIngrediant
     * @return \Illuminate\Http\Response
     */
    public function destroy(PizzaIngrediant $pizzaIngrediant)
    {
        //
    }
}
