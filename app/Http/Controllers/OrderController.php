<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use Session;

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

        $date = $request->get('date');
        $time = $request->get('time');
        $item = $request->get('item');
        $amount = $request->get('amount');
        $message = '検索結果が表示されました';

        if(!empty($date) && !empty($time) && !empty($item) && !empty($amount))
        {
    
            $orders = $user->orders()
            ->where('created_at', 'like', '%'.$date.'%')
            ->where('created_at', 'like', '%'.$time.'%')
            ->where('order_name', 'like', '%'.$item.'%')
            ->where('order_price', $amount)
            ->orderBy('created_at', 'desc')
            ->paginate(14);

            return view('order.index', 
            [
                'user' => $user,
                'orders' => $orders,
                'date' => $date,
                'time' => $time,
                'item' => $item,
                'amount' => $amount,
                'message' => $message,
                'message' => $message
            ]);

        } elseif (!empty($date) && !empty($time) && !empty($item)) {


            $orders = $user->orders()
            ->where('created_at', 'like', '%'.$date.'%')
            ->where('created_at', 'like', '%'.$time.'%')
            ->where('order_name', 'like', '%'.$item.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(14);

            return view('order.index', 
            [
                'user' => $user,
                'orders' => $orders,
                'date' => $date,
                'time' => $time,
                'item' => $item,
                'amount' => $amount,
                'message' => $message
            ]);

        } elseif(!empty($date) && !empty($time) && !empty($amount)) {

            $orders = $user->orders()
            ->where('created_at', 'like', '%'.$date.'%')
            ->where('created_at', 'like', '%'.$time.'%')
            ->where('order_price', $amount)
            ->orderBy('created_at', 'desc')
            ->paginate(14);

            return view('order.index', 
            [
                'user' => $user,
                'orders' => $orders,
                'date' => $date,
                'time' => $time,
                'item' => $item,
                'amount' => $amount,
                'message' => $message
            ]);

        } elseif(!empty($time) && !empty($item) && !empty($amount)) {


            $orders = $user->orders()
            ->where('created_at', 'like', '%'.$time.'%')
            ->where('order_name', 'like', '%'.$item.'%')
            ->where('order_price', $amount)
            ->orderBy('created_at', 'desc')
            ->paginate(14);

            return view('order.index', 
            [
                'user' => $user,
                'orders' => $orders,
                'date' => $date,
                'time' => $time,
                'item' => $item,
                'amount' => $amount,
                'message' => $message
            ]);

        } elseif(!empty($date) && !empty($item) && !empty($amount)) {

            $orders = $user->orders()
            ->where('created_at', 'like', '%'.$date.'%')
            ->where('order_name', 'like', '%'.$item.'%')
            ->where('order_price', $amount)
            ->orderBy('created_at', 'desc')
            ->paginate(14);

            return view('order.index', 
            [
                'user' => $user,
                'orders' => $orders,
                'date' => $date,
                'time' => $time,
                'item' => $item,
                'amount' => $amount,
                'message' => $message
            ]);

        } elseif(!empty($date) && !empty($time)) {

            $orders = $user->orders()
            ->where('created_at', 'like', '%'.$date.'%')
            ->where('created_at', 'like', '%'.$time.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(14);

            return view('order.index', 
            [
                'user' => $user,
                'orders' => $orders,
                'date' => $date,
                'time' => $time,
                'item' => $item,
                'amount' => $amount,
                'message' => $message
            ]);

        } elseif(!empty($date) && !empty($item)) {

            $orders = $user->orders()
            ->where('created_at', 'like', '%'.$date.'%')
            ->where('order_name', 'like', '%'.$item.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(14);

            return view('order.index', 
            [
                'user' => $user,
                'orders' => $orders,
                'date' => $date,
                'time' => $time,
                'item' => $item,
                'amount' => $amount,
                'message' => $message
            ]);

        } elseif(!empty($date) && !empty($amount)) {

            $orders = $user->orders()
            ->where('created_at', 'like', '%'.$date.'%')
            ->where('order_price', $amount)
            ->orderBy('created_at', 'desc')
            ->paginate(14);

            return view('order.index', 
            [
                'user' => $user,
                'orders' => $orders,
                'date' => $date,
                'time' => $time,
                'item' => $item,
                'amount' => $amount,
                'message' => $message
            ]);

        } elseif(!empty($time) && !empty($item)) {

            $orders = $user->orders()
            ->where('created_at', 'like', '%'.$time.'%')
            ->where('order_name', 'like', '%'.$item.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(14);

            return view('order.index', 
            [
                'user' => $user,
                'orders' => $orders,
                'date' => $date,
                'time' => $time,
                'item' => $item,
                'amount' => $amount,
                'message' => $message
            ]);

        } elseif(!empty($time) && !empty($amount)) {

            $orders = $user->orders()
            ->where('created_at', 'like', '%'.$time.'%')
            ->where('order_price', $amount)
            ->orderBy('created_at', 'desc')
            ->paginate(14);

            return view('order.index', 
            [
                'user' => $user,
                'orders' => $orders,
                'date' => $date,
                'time' => $time,
                'item' => $item,
                'amount' => $amount,
                'message' => $message
            ]);

        } elseif(!empty($item) && !empty($amount)) {

            $orders = $user->orders()
            ->where('order_name', 'like', '%'.$item.'%')
            ->where('order_price', $amount)
            ->orderBy('created_at', 'desc')
            ->paginate(14);

            return view('order.index', 
            [
                'user' => $user,
                'orders' => $orders,
                'date' => $date,
                'time' => $time,
                'item' => $item,
                'amount' => $amount,
                'message' => $message
            ]);

        } elseif(!empty($date) && empty($time) && empty($item) && empty($amount)) {

            $orders = $user->orders()
            ->where('created_at', 'like', '%'.$date.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(14);

            return view('order.index', 
            [
                'user' => $user,
                'orders' => $orders,
                'date' => $date,
                'time' => $time,
                'item' => $item,
                'amount' => $amount,
                'message' => $message
            ]);

        } elseif(empty($date) && !empty($time) && empty($item) && empty($amount)) {

            $orders = $user->orders()
            ->where('created_at', 'like', '%'.$time.'%')
            ->orderBy('created_at', 'desc')
            ->paginate(14);

            return view('order.index', 
            [
                'user' => $user,
                'orders' => $orders,
                'date' => $date,
                'time' => $time,
                'item' => $item,
                'amount' => $amount,
                'message' => $message
            ]);
        
        
            } elseif(empty($date) && empty($time) && !empty($item) && empty($amount)) {

                $orders = $user->orders()
                ->where('order_name', 'like', '%'.$item.'%')
                ->orderBy('created_at', 'desc')
                ->paginate(14);
    
                return view('order.index', 
                [
                    'user' => $user,
                    'orders' => $orders,
                    'date' => $date,
                    'time' => $time,
                    'item' => $item,
                    'amount' => $amount,
                    'message' => $message
                ]);

            } elseif(empty($date) && empty($time) && empty($item) && !empty($amount)) {

                $orders = $user->orders()
                ->where('order_price', $amount)
                ->orderBy('created_at', 'desc')
                ->paginate(14);
    
                return view('order.index', 
                [
                    'user' => $user,
                    'orders' => $orders,
                    'date' => $date,
                    'time' => $time,
                    'item' => $item,
                    'amount' => $amount,
                    'message' => $message
                ]);

            } else {

            $orders = $user->orders()->orderBy('created_at', 'desc')->paginate(14);

            return view('order.index', 
            [
                'user' => $user,
                'orders' => $orders,
                'date' => $date,
                'time' => $time,
                'item' => $item,
                'amount' => $amount
            ]);

        }

        
        
    //     if($request->has('date') || $request->has('time') || $request->has('item') || $request->has('amount')) {

    //         $validator = Validator::make($request->all(),[ 'order' => 'max:10']);

    //         if($validator->fails())
    //         {
    //             return redirect()->back()->withErrors($validator->errors())->withInput();
    //         }
    
    //         $orders = $user->orders()
    //         ->where('order_name', 'like', '%'.$item.'%')
    //         ->orWhere('order_price', $amount)
    //         ->orWhere('created_at', $date)
    //         ->orWhere('created_at', 'like', '%'.$time.'%')
    //         ->orderBy('created_at', 'desc')->paginate(14);
            
            

    // } else {
        
        
    // }


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
