<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
    	$comments = Comment::join('members', 'comments.user_id', '=', 'members.id')
    				->join('items', 'comments.item_id', '=', 'items.id')
                    ->select('comments.*', 'members.user_name','items.item_name')
                    ->getQuery() // Optional: downgrade to non-eloquent builder so we don't build invalid User objects.
                    ->get();
        return view('admin/comments/index',compact('comments'));
    }

    public function edit($id)
    {
    	$comment = Comment::findOrFail($id);
    	return view('admin/comments/edit',compact('comment'));
    }
    public function update($id)
    {
    	$comment = Comment::findOrFail($id);
    	$comment->comment=request('comment');

    	if ($comment->save()) {
    		flash()->overlay('Your Comment has been Updated', 'Admin');
    	}else {
    		flash()->overlay('Your Comment has been Not Updated', 'Admin');
    	}
    	return redirect('/comments');
    }
    public function destroy($id)
    {
    	$comment = Comment::findOrFail($id);
    	$comment->delete();
    	return redirect('/comments');
    }
}
