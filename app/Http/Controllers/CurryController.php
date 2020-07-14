<?php

namespace App\Http\Controllers;

use App\Curry;
use Illuminate\Http\Request;

class CurryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curries = Curry::paginate(5);
        return view('curry.index', ['curries' => $curries]);
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
     * @param  \App\Curry  $curry
     * @return \Illuminate\Http\Response
     */
    public function show(Curry $curry)
    {
        return view('curry.show', ['curry' => $curry]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curry  $curry
     * @return \Illuminate\Http\Response
     */
    public function edit(Curry $curry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curry  $curry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curry $curry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curry  $curry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curry $curry)
    {
        //
    }
}
