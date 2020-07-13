<?php

namespace App\Http\Controllers;

use App\Beef;
use Illuminate\Http\Request;

class BeefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beefs = Beef::all();
        return view('beef/index', ['beefs' => $beefs]);
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
     * @param  \App\Beef  $beef
     * @return \Illuminate\Http\Response
     */
    public function show(Beef $beef)
    {
        return view('beef.show', ['beef' => $beef]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Beef  $beef
     * @return \Illuminate\Http\Response
     */
    public function edit(Beef $beef)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Beef  $beef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beef $beef)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Beef  $beef
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beef $beef)
    {
        //
    }
}
