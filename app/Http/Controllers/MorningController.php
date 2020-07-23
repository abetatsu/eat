<?php

namespace App\Http\Controllers;

use App\Morning;
use Illuminate\Http\Request;
use Validator;

class MorningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('morning');

            if($request->has('morning')) {

                $validator = Validator::make($request->all(),
                    [
                    'morning' => 'required|max:10',
                    ],
                    [
                        'morning.required' => 'キーワードを入力してください',
                    ]);
    
                if($validator->fails())
                {
                    return redirect()->back()->withErrors($validator->errors())->withInput();
                }

            $mornings = Morning::where('name', 'like', '%'.$keyword.'%')->paginate(12);

        } else {
            $mornings = Morning::paginate(12);
        }
        
        return view('morning.index', ['mornings' => $mornings])->with('keyword', $keyword);
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
