<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTime;
use App\Beef;
use App\Curry;
use App\Morning;
use App\Other;
use App\Setmeal;
use App\Sidemenu;
use App\Order;

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
        $orders = User::find($user->id)->orders()->orderBy('created_at', 'desc')->take(4)->get();

        if($user->gender === 'male')
        {
            $dayNeedsCalories = 2500 - $user->totalCalories;
            $dayNeedsProtein = 100 - $user->totalProtein;
            $dayNeedsFat = 80 - $user->totalFat;
            $dayNeedsCarb = 350 - $user->totalCarb;
            $dayNeedsSodium = 8 - $user->totalSodium;
            $weekNeedsCalories = 17500 - $user->totalWeekCalories;
            $weekNeedsProtein = 700 - $user->totalWeekProtein;
            $weekNeedsFat = 560 - $user->totalWeekFat;
            $weekNeedsCarb = 2450 - $user->totalWeekCarb;
            $weekNeedsSodium = 56 - $user->totalWeekSodium;

        } elseif($user->gender === 'female') {
            
            $dayNeedsCalories = 1800 - $user->totalCalories;
            $dayNeedsProtein = 70 - $user->totalProtein;
            $dayNeedsFat = 50 - $user->totalFat;
            $dayNeedsCarb = 290 - $user->totalCarb;
            $dayNeedsSodium = 7 - $user->totalSodium;
            $weekNeedsCalories = 12600 - $user->totalWeekCalories;
            $weekNeedsProtein = 490 - $user->totalWeekProtein;
            $weekNeedsFat = 350 - $user->totalWeekFat;
            $weekNeedsCarb = 2030 - $user->totalWeekCarb;
            $weekNeedsSodium = 49 - $user->totalWeekSodium;
        }

        return view('user.show', 
        [
            'user' => $user,
            'orders' => $orders,
            'dayNeedsCalories' => $dayNeedsCalories,
            'dayNeedsProtein' => $dayNeedsProtein,
            'dayNeedsFat' => $dayNeedsFat,
            'dayNeedsCarb' => $dayNeedsCarb,
            'dayNeedsSodium' => $dayNeedsSodium,
            'weekNeedsCalories' => $weekNeedsCalories,
            'weekNeedsProtein' => $weekNeedsProtein,
            'weekNeedsFat' => $weekNeedsFat,
            'weekNeedsCarb' => $weekNeedsCarb,
            'weekNeedsSodium' => $weekNeedsSodium
        ]);
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

            $order = Order::create(
                [
                    'user_id' => $user->id,
                    'order_name' => $beef->name,
                    'order_price' => $beef->price,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]);

            
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

            $order = Order::create(
                [
                    'user_id' => $user->id,
                    'order_name' => $curry->name,
                    'order_price' => $curry->price,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]);

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

            $order = Order::create(
                [
                    'user_id' => $user->id,
                    'order_name' => $morning->name,
                    'order_price' => $morning->price,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]);

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

            $order = Order::create(
                [
                    'user_id' => $user->id,
                    'order_name' => $other->name,
                    'order_price' => $other->price,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]);

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

            $order = Order::create(
                [
                    'user_id' => $user->id,
                    'order_name' => $setmeal->name,
                    'order_price' => $setmeal->price,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]);

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

            $order = Order::create(
                [
                    'user_id' => $user->id,
                    'order_name' => $sidemenu->name,
                    'order_price' => $sidemenu->price,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]);

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


        $order->save();
        
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
