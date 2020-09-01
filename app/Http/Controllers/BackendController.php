<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class BackendController extends Controller
{
    public function backendfun($value='')
    {
    	// $route=Route::current();
    	// dd($route); //လက်ရှိဟာကိုထုတ်ကြည့်တာ dd dieနဲ့တူတယ်
    	return view('Backend.dashboard');//view user show place
    }

    public function orderlist($value='')
    {
      $orders = Order::all();
      return view('Backend.orderlist',compact('orders'));
    }

    public function orderdetail($id)
    {
       $orderdetail = Order::find($id);

       return view('Backend.orderdetail',compact('orderdetail'));
    }
}
