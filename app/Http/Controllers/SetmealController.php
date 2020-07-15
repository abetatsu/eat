<?php

namespace App\Http\Controllers;

use App\Setmeal;
use Illuminate\Http\Request;

class SetmealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setmeals = Setmeal::paginate(6);
        return view('setmeal.index', ['setmeals' => $setmeals]);
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
     * @param  \App\Setmeal  $setmeal
     * @return \Illuminate\Http\Response
     */
    public function show(Setmeal $setmeal)
    {
        return view('setmeal.show', ['setmeal' => $setmeal]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setmeal  $setmeal
     * @return \Illuminate\Http\Response
     */
    public function edit(Setmeal $setmeal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setmeal  $setmeal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setmeal $setmeal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setmeal  $setmeal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setmeal $setmeal)
    {
        //
    }
}
