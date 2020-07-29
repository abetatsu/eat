<?php

namespace App\Http\Controllers;

use App\Other;
use Illuminate\Http\Request;
use Validator;
use Auth;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('other');

            if($request->has('other')) {

                $validator = Validator::make($request->all(),
                    [
                    'other' => 'required|max:10',
                    ],
                    [
                        'other.required' => 'キーワードを入力してください',
                    ]);
    
                if($validator->fails())
                {
                    return redirect()->back()->withErrors($validator->errors())->withInput();
                }
        
            $others = Other::where('name', 'like', '%'.$keyword.'%')->paginate(12);
        } else {
            $others = Other::paginate(12);
        }
        
        return view('other.index', ['others' => $others])->with('keyword', $keyword);
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
     * @param  \App\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function show(Other $other)
    {
        $user = Auth::user();

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

        return view('other.show', 
        [
            'other' => $other,
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
     * @param  \App\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function edit(Other $other)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Other $other)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function destroy(Other $other)
    {
        //
    }
}
