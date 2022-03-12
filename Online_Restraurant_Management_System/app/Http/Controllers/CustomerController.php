<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\product;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\StorecustomerRequest;
use App\Http\Requests\UpdatecustomerRequest;

class CustomerController extends Controller
{
    public function myOrders(){
        $c_id = session()->get('customer');
        $orders = Order::where('c_id',$c_id)->get();
        return view('customer.myorders')->with('orders',$orders);
    }
    public function orderdetails(Request $request){
        $id = $request->id;
        $order = Order::where('id',$id)->first();
        //return $order->products[0]->order->customer;
        return view('customer.orderdetails')->with('order',$order);
    }
}
