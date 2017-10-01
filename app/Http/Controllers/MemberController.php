<?php

namespace App\Http\Controllers;

use App\Http\Requests\MemberRequest;
use App\Member;
use Illuminate\Auth\Middleware\Auth;
use Illuminate\Http\Request;
use Session;
class MemberController extends Controller
{
    
    public function index()
    {
    	$members = Member::where('reg_status',1)->get();
        
    	return view('admin/members/index',compact('members'));
    }
    public function create()
    {
    	return view('admin/members/create');
    }
    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('admin/members/show',compact('member'));
    }
    
    public function store(MemberRequest $request)
    {
    	// $data = $request->all([
    	// 		bcrypt($request->password),
    	// 	]);
    	
    	// Member::create($data);

    	$user = new Member();
		$user->user_name = $request->user_name;
		$user->email = $request->email;
		$user->full_name = $request->full_name;
		$user->password = bcrypt($request->password);
		$user->group_id = $request->group_id;
		// $user->image = $request->image;
		$user->trust_status = $request->trust_status;
		$user->reg_status = $request->reg_status;
		if($request->hasFile('image')){
            $photo = 'image/upload/';
            $name = str_random(12).'_'.time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($photo,$name);
            $path = $photo.$name;
            $user->image = $path;
        }
        if (! $user->save()) {
            flash('Your Article has been created')->warning();
        }
		flash()->overlay('Your Member has been created', 'Admin');

    	return redirect('/members');
    }
    
    public function edit($id)
    {
        $members = Member::findOrFail($id);
    	return view('admin/members/edit',compact('members'));
    }
    public function update($id ,MemberRequest $request)
    {
        // return $request->all();
    	$user = Member::find($id);
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->full_name = $request->full_name;
        $user->password = bcrypt($request->password);
        $user->group_id = $request->group_id;
        $user->trust_status = $request->trust_status;
        $user->reg_status = $request->reg_status;
        
        if($request->hasFile('image')){
            $photo = 'image/upload/';
            $name = str_random(12).'_'.time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($photo,$name);
            $path = $photo.$name;
            $user->image = $path;
        }
        
        if ($user->save()) {
            flash()->overlay('Your Member has been Updated', 'Admin');
        }else{
            flash('Your Article has Not been Updated')->warning();
        }
    
        return redirect('members');
    }
    public function newMembers()
    {

        $members = Member::where('reg_status',0)->get();
        return view('admin/members/newMembers',compact('members'));
    }
    public function active($id)
    {

        $members = Member::findOrFail($id);
        $members->reg_status = 1;
        if ($members->save()) {
            flash()->overlay('Your Member has been Actived', 'Admin');
        }else{
            flash('Your Article has Not been Actived')->warning();
        }
        return redirect('/members');
    }
    public function notactive($id)
    {

        $members = Member::findOrFail($id);
        $members->reg_status = 0;
        if ($members->save()) {
            flash()->overlay('Your Member has been Not Actived', 'Admin');
        }else{
            flash('Your Article has Not been Actived')->warning();
        }
        return redirect('/members');
    }
    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        return redirect('/members');
    }



    public function getSignOut()
    {
        auth()->logout();
        Session::flush();
        return Redirect::to('admin/auth/login');
    }


}
// route('members.update',$members->id)