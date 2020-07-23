<?php

namespace App\Http\Controllers;

use App\Sidemenu;
use Illuminate\Http\Request;
use Validator;

class SidemenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('sidemenu');

            if($request->has('sidemenu')) {

                $validator = Validator::make($request->all(),
                    [
                    'sidemenu' => 'required|max:10',
                    ],
                    [
                        'sidemenu.required' => 'キーワードを入力してください',
                    ]);
    
                if($validator->fails())
                {
                    return redirect()->back()->withErrors($validator->errors())->withInput();
                }

            $sidemenus = Sidemenu::where('name', 'like', '%'.$keyword.'%')->paginate(12);

        } else {
            $sidemenus = Sidemenu::paginate(12);
        }
        
        return view('sidemenu.index', ['sidemenus' => $sidemenus])->with('keyword', $keyword);
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
     * @param  \App\Sidemenu  $sidemenu
     * @return \Illuminate\Http\Response
     */
    public function show(Sidemenu $sidemenu)
    {
        return view('sidemenu.show', ['sidemenu' => $sidemenu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sidemenu  $sidemenu
     * @return \Illuminate\Http\Response
     */
    public function edit(Sidemenu $sidemenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sidemenu  $sidemenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sidemenu $sidemenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sidemenu  $sidemenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sidemenu $sidemenu)
    {
        //
    }
}
