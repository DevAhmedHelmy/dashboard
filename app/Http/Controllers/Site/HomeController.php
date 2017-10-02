<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	$items = Item::join('members', 'items.member_id', '=', 'members.id')
    				->join('categories', 'items.cat_id', '=', 'categories.id')
                    ->select('items.*', 'members.user_name','categories.cat_name')
                    ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
                    ->get();

    	return view('front/home/index',compact('items'));
    }
    public function about()
    {
    	return view('front/about/about');
    }
    public function show($id)
    {

    	// $item = Item::findOrFail($id);
    	$item = Item::where('items.id','=',$id)
    				->join('members', 'items.member_id', '=', 'members.id')
    				->join('categories', 'items.cat_id', '=', 'categories.id')
                    ->select('items.*', 'members.user_name','categories.cat_name')
                    ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
                    ->first();
    	return view('front/items/show',compact('item'));
    }
}
