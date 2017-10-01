<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Item;
use App\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::take(8)->orderBy('id','desc')->get();
        $active = Member::where('reg_status',1)->count();
        $inactive = Member::where('reg_status',0)->count();
        $inactive = Member::where('reg_status',0)->count();
        $item = Item::count();
        $ltestItems = Item::take(8)->orderBy('id','desc')->get();
        $comment = Comment::count();
        return view('admin.home',compact('members','active','inactive','item','comment','ltestItems'));

    }
    

}
