<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use App\Member;
use App\User;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
    	$result = Item::join('members', 'items.member_id', '=', 'members.id')
    				->join('categories', 'items.cat_id', '=', 'categories.id')
                    ->select('items.*', 'members.user_name','categories.cat_name')
                    ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
                    ->get();

    	return view('admin/items/index',compact('result'));
    }
    public function create()
    {
    	$categories = Category::all();
    	$users = Member::all();
    	return view('admin/items/create',compact('categories','users'));
    }
    public function show($id)
    {
         $item = Item::find($id);
        $item = Item::join('members', 'items.member_id', '=', 'members.id')
                    ->join('categories', 'items.cat_id', '=', 'categories.id')
                    ->where('items.id','=',$id)
                    ->select('items.*', 'members.user_name','categories.cat_name')
                    ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.

                    ->first();

        return view('admin/items/show',compact('item'));
    }
    public function approve($id)
    {
        $items = Item::findOrFail($id);
        $items->approve = 1;
        if ($items->save()) {
            flash()->overlay('Your Member has been Actived', 'Admin');
        }else{
            flash('Your Article has Not been Actived')->warning();
        }
        return redirect('/items');
    }
    public function notapprove($id)
    {

        $items = Item::findOrFail($id);
        $items->approve = 0;
        if ($items->save()) {
            flash()->overlay('Your Member has been Actived', 'Admin');
        }else{
            flash('Your Article has Not been Actived')->warning();
        }
        return redirect('/items');
    }
    public function store()
    {
    	$item = new Item;
    	$item->item_name=request('item_name');
    	$item->description=request('description');
    	$item->price=request('price');
    	$item->country_made=request('country_made');
    	$item->status=request('status');
    	$item->rating=request('rating');
    	$item->member_id=request('user');
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
        return redirect('/items');

    }
    public function edit($id)
    {
    	$item = Item::findOrFail($id);
    	return view('admin/items/edit',compact('item'));
    }
    public function update($id)
    {

    	$item = Item::findOrFail($id);
    	$item->item_name=request('item_name');
    	$item->description=request('description');
    	$item->price=request('price');
    	$item->country_made=request('country_made');
    	$item->status=request('status');
    	$item->rating=request('rating');
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
        return redirect('/items');
    }
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect('/items');
    }
}
