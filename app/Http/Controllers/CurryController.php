<?php

namespace App\Http\Controllers;

use App\Curry;
use Illuminate\Http\Request;
use Validator;

class CurryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('curry')) {

            $validator = Validator::make($request->all(),
                [
                'curry' => 'required|max:10',
                ],
                [
                    'curry.required' => 'キーワードを入力してください',
                ]);

            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }

            $curries = Curry::where('name', 'like', '%'.$request->get('curry').'%')->paginate(10);

        } else {
            
            $curries = Curry::paginate(10);
        }
        
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
