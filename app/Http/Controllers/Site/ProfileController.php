<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Item;
use App\Member;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id)
    {
   
    	$user = Member::where('id','=',$id)->get();
    	$items = Item::where('member_id','=',$id)->get();
    
    	return view('front/profile/show',compact('user','items'));
    }
}
