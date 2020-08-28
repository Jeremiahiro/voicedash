<?php

namespace App\Http\Controllers;

use App\Voicedash;
use Illuminate\Http\Request;

class VoicedashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('voices.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voicedash  $voicedash
     * @return \Illuminate\Http\Response
     */
    public function show(Voicedash $voicedash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voicedash  $voicedash
     * @return \Illuminate\Http\Response
     */
    public function edit(Voicedash $voicedash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voicedash  $voicedash
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voicedash $voicedash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voicedash  $voicedash
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voicedash $voicedash)
    {
        //
    }
}
