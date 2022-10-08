<?php

namespace App\Http\Controllers;

use App\Models\Sandwiche;
use App\Http\Requests\StoreSandwicheRequest;
use App\Http\Requests\UpdateSandwicheRequest;

class SandwicheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Sandwiche::with('ingredientSandwich')->get();
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
     * @param  \App\Http\Requests\StoreSandwicheRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSandwicheRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sandwiche  $sandwiche
     * @return \Illuminate\Http\Response
     */
    public function show(Sandwiche $sandwiche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sandwiche  $sandwiche
     * @return \Illuminate\Http\Response
     */
    public function edit(Sandwiche $sandwiche)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSandwicheRequest  $request
     * @param  \App\Models\Sandwiche  $sandwiche
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSandwicheRequest $request, Sandwiche $sandwiche)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sandwiche  $sandwiche
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sandwiche $sandwiche)
    {
        //
    }
}
