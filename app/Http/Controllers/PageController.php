<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;
use App\Category;

class PageController extends Controller
{
    function mainfun($value='')
    {
        // dd('hi');
        $items = Item::take(6)->orderBy('id','desc')->get();
        $brands = Brand::all();
        $categories = Category::all();
    	// $route=Route::current();
    	// dd($route); //လက်ရှိဟာကိုထုတ်ကြည့်တာ dd dieနဲ့တူတယ်
    	return view('main',compact('items','brands','categories'));//view user show place
    }
    function brandfun($id)
    {
        $brand = Brand::find($id);
    	return view('brand',compact('brand'));
    }
    function itemdetailfun($value='')
    {

    	return view('itemdetail');
    }
    function loginfun($value='')
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
