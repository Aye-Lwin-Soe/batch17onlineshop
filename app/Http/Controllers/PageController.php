<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Item;

class PageController extends Controller
{
    function mainfun($value='')
    {
        // dd('hi');
        $items = Item::take(6)->orderBy('id','desc')->get();
        
    	// $route=Route::current();
    	// dd($route); //လက်ရှိဟာကိုထုတ်ကြည့်တာ dd dieနဲ့တူတယ်
    	return view('main',compact('items'));//view user show place
    }
    function brandfun($value='')
    {
    	return view('brand');
    }
    function itemdetailfun($value='')
    {
    	return view('itemdetail');
    }
    function lgoinfun($value='')
    {
    	return view('login');//('foldername.filename')
    }
    function promotionfun($value='')
    {
    	return view('promotion');
    }
    function registerfun($value='')
    {
    	return view('register');
    }
    function shoppingcartfun($value='')
    {
    	return view('shoppingcart');
    }
     function subcategoryfun($value='')
    {
    	return view('subcategory');
    }


}
