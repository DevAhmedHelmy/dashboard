<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::latest()->get();
    	
    	return view('admin/categories/index',compact('categories'));
    }
    public function create()
    {
    	return view('admin/categories/create');
    }
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin/categories/show',compact('category'));
    }
    public function store()
    {
    	$categories = new Category;
    	$categories->cat_name = request('cat_name');
    	$categories->description = request('description');
    	$categories->ordering = request('ordering');
    	$categories->visiblity = request('visibility');
    	$categories->allow_comment = request('comment');
    	$categories->allow_adds = request('adds');
    	$categories->save();

    	return redirect('categories');

    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin/categories/edit',compact('category'));
    }
    public function update($id)
    {

        $category = Category::find($id);

        $category->cat_name = request('cat_name');
        $category->description = request('description');
        $category->ordering = request('ordering');
        $category->visiblity = request('visibility');
        $category->allow_comment = request('comment');
        $category->allow_adds = request('adds');

        if ($category->save()) {
            flash()->overlay('Your Category has been Updated', 'Admin');
        }else{
            flash('Your Category has Not been Updated')->warning();
        }
        return redirect('/categories');
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('/categories');
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
    public function visible($id)
    {

        $category = Category::findOrFail($id);
        $category->visiblity = 1;
        if ($category->save()) {
            flash()->overlay('Your Member has been Actived', 'Admin');
        }else{
            flash('Your Article has Not been Actived')->warning();
        }
        return redirect('/categories');
    }
    public function notVisible($id)
    {

        $category = Category::findOrFail($id);
        $category->visiblity = 0;
        if ($category->save()) {
            flash()->overlay('Your Member has been Actived', 'Admin');
        }else{
            flash('Your Article has Not been Actived')->warning();
        }
        return redirect('/categories');
    }
    public function allowComment($id)
    {

        $category = Category::findOrFail($id);
        $category->allow_comment = 1;
        if ($category->save()) {
            flash()->overlay('Your Member has been Actived', 'Admin');
        }else{
            flash('Your Article has Not been Actived')->warning();
        }
        return redirect('/categories');
    }
    public function notAllowComment($id)
    {

        $category = Category::findOrFail($id);
        $category->allow_comment = 0;
        if ($category->save()) {
            flash()->overlay('Your Member has been Actived', 'Admin');
        }else{
            flash('Your Article has Not been Actived')->warning();
        }
        return redirect('/categories');
    }
    public function allowadds($id)
    {

        $category = Category::findOrFail($id);
        $category->allow_adds = 1;
        if ($category->save()) {
            flash()->overlay('Your Member has been Actived', 'Admin');
        }else{
            flash('Your Article has Not been Actived')->warning();
        }
        return redirect('/categories');
    }
    public function notAllowAdds($id)
    {

        $category = Category::findOrFail($id);
        $category->allow_adds = 0;
        if ($category->save()) {
            flash()->overlay('Your Member has been Actived', 'Admin');
        }else{
            flash('Your Article has Not been Actived')->warning();
        }
        return redirect('/categories');
    }
    
}
