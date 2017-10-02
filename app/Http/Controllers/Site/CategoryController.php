<?php

namespace App\Http\Controllers\Site;

use App\Category;
use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::all();
    	$items = Item::all();
    	return view('front/categories/index',compact('categories','items'));
    }
    public function show($id)
    {
        $categories = Category::all();
        $items = Item::where('cat_id','=',$id)->get();
     
    	return view('front/categories/show',compact('categories','items'));
    }
}
