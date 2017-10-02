<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Http\Request;

class RegisterationController extends Controller
{
    public function create()
    {
    	return view('front/registeration/create');
    }
    public function store(Request $request)
    {

    	$user = new Member();
		$user->user_name = $request->user_name;
		$user->email = $request->email;
		$user->full_name = $request->full_name;
		$user->password = bcrypt($request->password);
		$user->group_id = 0;
		$user->trust_status = 0;
		$user->reg_status =0;
		if($request->hasFile('image')){
            $photo = 'image/upload/';
            $name = str_random(12).'_'.time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($photo,$name);
            $path = $photo.$name;
            $user->image = $path;
        }
        if (! $user->save()) {
            flash('Please Check Your Data')->warning();
        }
		flash()->overlay('Hello in E-Shop Website', 'Admin');

    	return redirect('/');
    }
}
