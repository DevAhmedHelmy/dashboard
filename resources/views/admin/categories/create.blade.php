@extends('admin/layouts.master')
@section('content-header')

	<h1>
	Categories
	<small>Create New Categories</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="/categories"><i class="fa fa-paw"></i> Categories</a></li>
		<li class="active"><a href="/categories"><i class="fa fa-plus"></i>Add New Categories</a></li>
		
	</ol>

@endsection


@section('content')
	<form class="form-horizontal" method="post" action="/categories"  enctype="multipart/form-data">
        {{csrf_field()}}
        <fieldset>
            <legend><h2>Add Category</h2></legend>
            <!-- User Name input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Category Name</label>
                <div class="col-md-6">
                    <input id="textinput" name="cat_name" type="text" placeholder="Category Name"
                           class="form-control input-md">
                </div>
            </div>

            <!-- Email input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Description</label>
                <div class="col-md-6">
                    <input id="textinput" name="description" type="text"
                           placeholder="Description Category" class="form-control input-md">
                </div>
            </div>
            <!-- Full Name input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Ordering</label>
                <div class="col-md-6">
                    <input id="textinput" name="ordering" type="text" placeholder="Number To Arrange The Categories" class="form-control input-md">
                </div>
            </div>
            <!-- Visibility input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="passwordinput">Visibility</label>
                <div class="col-md-6">
                    <div class="radio">
                        <label for="vis-yes">
                          <input id="vis-yes" type="radio" name="visibility" value="0" checked/>
                          Yes
                        </label>
                    </div>
                   <div class="radio">
                        <label for="vis-no">
                          <input id="vis-no" type="radio" name="visibility" value="1"/>
                          No
                        </label>
                    </div>
                </div>
            </div>
            <!-- Commenting input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="passwordinput">Allow Commenting</label>
                <div class="col-md-6">
                    <div class="radio">
                        <label for="comment-yes">
                          <input id="comment-yes" type="radio" name="comment" value="0" checked/>
                          Yes
                        </label>
                    </div>
                   <div class="radio">
                        <label for="comment-no">
                          <input id="comment-no" type="radio" name="comment" value="1"/>
                          No
                        </label>
                    </div>
                </div>
            </div>
            <!-- Adds input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="passwordinput">Allow Adds</label>
                <div class="col-md-6">
                    <div class="radio">
                        <label for="add-yes">
                          <input id="add-yes" type="radio" name="adds" value="0" checked/>
                          Yes
                        </label>
                    </div>
                   <div class="radio">
                        <label for="add-no">
                          <input id="add-no" type="radio" name="adds" value="1"/>
                          No
                        </label>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="form-group">
        	<label class="col-md-2 control-label" for="">Save Category</label>
        	<div class="col-md-6">
        		<button type="submit"
                    class="btn btn-primary">Save Category
            </button>
        	</div>
            
        </div>
    </form>


@endsection