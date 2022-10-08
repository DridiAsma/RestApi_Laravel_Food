<?php

namespace App\Http\Controllers;

use App\Models\TacosIngreadients;
use App\Http\Requests\StoreTacosIngreadientsRequest;
use App\Http\Requests\UpdateTacosIngreadientsRequest;

class TacosIngreadientsController extends Controller
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
     * @param  \App\Http\Requests\StoreTacosIngreadientsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTacosIngreadientsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TacosIngreadients  $tacosIngreadients
     * @return \Illuminate\Http\Response
     */
    public function show(TacosIngreadients $tacosIngreadients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TacosIngreadients  $tacosIngreadients
     * @return \Illuminate\Http\Response
     */
    public function edit(TacosIngreadients $tacosIngreadients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTacosIngreadientsRequest  $request
     * @param  \App\Models\TacosIngreadients  $tacosIngreadients
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTacosIngreadientsRequest $request, TacosIngreadients $tacosIngreadients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TacosIngreadients  $tacosIngreadients
     * @return \Illuminate\Http\Response
     */
    public function destroy(TacosIngreadients $tacosIngreadients)
    {
        //
    }
}
