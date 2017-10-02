<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SessionController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest',['except'=>'destroy']);
	}
    public function create()
    {
    	return view('front/sessions/create');
    }
    public function store()
	{
		if(!auth()->attempt(request(['email','password']))){
			// dd(request('email'));
			return back()->withErrors([
			'message' => 'Please Check UserName and Password and Try agian'
			]);
			
			
		}else {
			return redirect('/');
		}
		
		
	}
	
	public function destroy()
	{
		auth()->logout();
		return redirect('/');
	}
	
}
