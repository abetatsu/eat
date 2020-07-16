<?php

namespace App\Http\Controllers;

use App\Morning;
use Illuminate\Http\Request;

class MorningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mornings = Morning::paginate(12);
        return view('morning.index', ['mornings' => $mornings]);
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
     * @param  \App\Morning  $morning
     * @return \Illuminate\Http\Response
     */
    public function show(Morning $morning)
    {
        return view('morning.show', ['morning'=> $morning]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Morning  $morning
     * @return \Illuminate\Http\Response
     */
    public function edit(Morning $morning)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Morning  $morning
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Morning $morning)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Morning  $morning
     * @return \Illuminate\Http\Response
     */
    public function destroy(Morning $morning)
    {
        //
    }
}
