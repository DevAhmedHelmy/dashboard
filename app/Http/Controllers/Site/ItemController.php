<?php

namespace App\Http\Controllers\Site;

use App\Category;
use App\Http\Controllers\Controller;
use App\Item;
use App\Member;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show($id)
    {
    	// $item = Item::findOrFail($id);

    	$item = Item::findOrFail($id);
    	// return $item;
   
    	return view('front/items/show',compact('item'));
    }
    
    public function create()
    {
    	$categories = Category::all();
    	return view('front/items/create',compact('categories','users'));
    }
    public function store()
    {
    	$item = new Item;
    	$item->item_name=request('item_name');
    	$item->description=request('description');
    	$item->price=request('price');
    	$item->country_made=request('country_made');
    	$item->status=request('status');
    	$item->member_id=auth()->user()->id;
    	$item->cat_id=request('categories');
    	if(request()->hasFile('image')){
            $photo = 'image/upload/';
            $name = str_random(12).'_'.time().".".request()->file('image')->getClientOriginalExtension();
            request()->file('image')->move($photo,$name);
            $path = $photo.$name;
            $item->item_image = $path;
        }
       
        if (! $item->save()) {
            flash('Your item has been created')->warning();
        }
		flash()->overlay('Your item has been created', 'Admin');
        return redirect('/profies');

    }
}
