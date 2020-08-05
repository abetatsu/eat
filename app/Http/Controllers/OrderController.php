<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        $keyword = $request->get('order');
        
        if($request->has('order')) {

            $validator = Validator::make($request->all(),
                [
                'order' => 'required|max:10',
                ],
                [
                    'order.required' => 'キーワードを入力してください',
                ]);

            if($validator->fails())
            {
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }
    
        $orders = $user->orders()
        ->where('order_name', 'like', '%'.$keyword.'%')
        ->orWhere('order_price', 'like', '%'.$keyword.'%')
        ->orWhere('created_at', 'like', '%'.$keyword.'%')
        ->orderBy('created_at', 'desc')->paginate(14);
        
        return view('order.index', ['user' => $user, 'orders' => $orders, 'keyword' => $keyword]);

    } else {
        
        $orders = $user->orders()->orderBy('created_at', 'desc')->paginate(14);

        return view('order.index', ['user' => $user, 'orders' => $orders, 'keyword' => $keyword]);
    }


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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
