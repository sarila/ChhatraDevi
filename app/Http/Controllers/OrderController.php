<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::latest()->get();
        $orders->transform(function($order, $key) {
            $order->cart = unserialize($order->cart);
            // dd($order);
            return $order;
        });
        return view('backend.orders.index', compact('orders'));
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
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $order->cart = unserialize($order->cart);
        return view('backend.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $order->cart = unserialize($order->cart);
        return view('backend.orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $this->requestValidation($request);
        $order->update($request->all());
        Session::flash('success_message', 'Order Status updated Successfully');
        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        Session::flash('success_message', 'Order has been deleted Successfully');
        return redirect()->route('orders.index');
    }

    public function requestValidation(Request $request) {
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'contact' => 'required' ,
            'address' => 'required',
        ];

        $messages = [
            'first_name.required' => 'First Name is required',
            'last_name.required' => 'Last Name is required',
            'contact.required' => 'Contact Number is required',
            'address.required' => 'Address is required',
        ];

       $this->validate($request, $rules, $messages);
    }
}
