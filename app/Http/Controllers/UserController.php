<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Beef;
use App\Curry;

class UserController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user = \Auth::user();



        return view('user.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = \Auth::user();

        if($request->has('beef_id')) {
            $beef = Beef::find($request->beef_id);

            $user->totalPrice += $beef->price;
            $user->totalCalories += $beef->calories;
            $user->totalProtein += $beef->protein;
            $user->totalFat += $beef->fat;
            $user->totalCarb += $beef->carb;
            $user->totalSodium += $beef->sodium;

        } else if($request->has('curry_id')) {

            $curry = Curry::find($request->curry_id);

            $user->totalPrice += $curry->price;
            $user->totalCalories += $curry->calories;
            $user->totalProtein += $curry->protein;
            $user->totalFat += $curry->fat;
            $user->totalCarb += $curry->carb;
            $user->totalSodium += $curry->sodium;
        }

        
        
        $user->save();
        
        return redirect('/')->with('flash_message', '購入完了しました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
