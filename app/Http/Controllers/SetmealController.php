<?php

namespace App\Http\Controllers;

use App\Setmeal;
use Illuminate\Http\Request;
use Validator;
use Auth;

class SetmealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('setmeal');

            if($request->has('setmeal')) {

                $validator = Validator::make($request->all(),
                    [
                    'setmeal' => 'required|max:10',
                    ],
                    [
                        'setmeal.required' => 'キーワードを入力してください',
                    ]);
    
                if($validator->fails())
                {
                    return redirect()->back()->withErrors($validator->errors())->withInput();
                }


            $setmeals = Setmeal::where('name', 'like', '%'.$keyword.'%')->paginate(12);

        } else {
            $setmeals = Setmeal::paginate(12);
        }
        
        return view('setmeal.index', ['setmeals' => $setmeals])->with('keyword', $keyword);
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
        $user = Auth::user();
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

        return view('setmeal.show', 
        [
            'setmeal' => $setmeal,
            'user' => $user,
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
