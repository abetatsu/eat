<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Beef;
use App\Curry;
use App\Morning;
use App\Other;
use App\Setmeal;
use App\Sidemenu;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $user = Auth::user();
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
        
        $user = Auth::user();

        if($request->has('beef_id')) {
            $beef = Beef::find($request->beef_id);

            $user->totalPrice += $beef->price;
            $user->totalCalories += $beef->calories;
            $user->totalProtein += $beef->protein;
            $user->totalFat += $beef->fat;
            $user->totalCarb += $beef->carb;
            $user->totalSodium += $beef->sodium;

            $user->totalWeekCalories += $beef->calories;
            $user->totalWeekProtein += $beef->protein;
            $user->totalWeekFat += $beef->fat;
            $user->totalWeekCarb += $beef->carb;
            $user->totalWeekSodium += $beef->sodium;

        } else if($request->has('curry_id')) {

            $curry = Curry::find($request->curry_id);

            $user->totalPrice += $curry->price;
            $user->totalCalories += $curry->calories;
            $user->totalProtein += $curry->protein;
            $user->totalFat += $curry->fat;
            $user->totalCarb += $curry->carb;
            $user->totalSodium += $curry->sodium;

            $user->totalWeekCalories += $curry->calories;
            $user->totalWeekProtein += $curry->protein;
            $user->totalWeekFat += $curry->fat;
            $user->totalWeekCarb += $curry->carb;
            $user->totalWeekSodium += $curry->sodium;

        } else if($request->has('morning_id')) {

            $morning = Morning::find($request->morning_id);

            $user->totalPrice += $morning->price;
            $user->totalCalories += $morning->calories;
            $user->totalProtein += $morning->protein;
            $user->totalFat += $morning->fat;
            $user->totalCarb += $morning->carb;
            $user->totalSodium += $morning->sodium;

            $user->totalWeekCalories += $morning->calories;
            $user->totalWeekProtein += $morning->protein;
            $user->totalWeekFat += $morning->fat;
            $user->totalWeekCarb += $morning->carb;
            $user->totalWeekSodium += $morning->sodium;

        } else if($request->has('other_id')) {

            $other = Other::find($request->other_id);

            $user->totalPrice += $other->price;
            $user->totalCalories += $other->calories;
            $user->totalProtein += $other->protein;
            $user->totalFat += $other->fat;
            $user->totalCarb += $other->carb;
            $user->totalSodium += $other->sodium;

            $user->totalWeekCalories += $other->calories;
            $user->totalWeekProtein += $other->protein;
            $user->totalWeekFat += $other->fat;
            $user->totalWeekCarb += $other->carb;
            $user->totalWeekSodium += $other->sodium;

        } else if($request->has('setmeal_id')) {

            $setmeal = Setmeal::find($request->setmeal_id);

            $user->totalPrice += $setmeal->price;
            $user->totalCalories += $setmeal->calories;
            $user->totalProtein += $setmeal->protein;
            $user->totalFat += $setmeal->fat;
            $user->totalCarb += $setmeal->carb;
            $user->totalSodium += $setmeal->sodium;

            $user->totalWeekCalories += $setmeal->calories;
            $user->totalWeekProtein += $setmeal->protein;
            $user->totalWeekFat += $setmeal->fat;
            $user->totalWeekCarb += $setmeal->carb;
            $user->totalWeekSodium += $setmeal->sodium;

        } else if($request->has('sidemenu_id')) {

            $sidemenu = Sidemenu::find($request->sidemenu_id);

            $user->totalPrice += $sidemenu->price;
            $user->totalCalories += $sidemenu->calories;
            $user->totalProtein += $sidemenu->protein;
            $user->totalFat += $sidemenu->fat;
            $user->totalCarb += $sidemenu->carb;
            $user->totalSodium += $sidemenu->sodium;

            $user->totalWeekCalories += $sidemenu->calories;
            $user->totalWeekProtein += $sidemenu->protein;
            $user->totalWeekFat += $sidemenu->fat;
            $user->totalWeekCarb += $sidemenu->carb;
            $user->totalWeekSodium += $sidemenu->sodium;
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
