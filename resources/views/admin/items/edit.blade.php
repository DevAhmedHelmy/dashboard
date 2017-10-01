@extends('admin/layouts.master')
@section('content-header')

    <h1>
    Categories
    <small>Show All Categories</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><a href="/categories"><i class="fa fa-paw"></i> Categories</a></li>
        
    </ol>

@endsection

@section('content')
@if(isset($item))
<form class="form-horizontal" method="POST" action="{{route('itemUpdate',['id'=>$item->id])}}" 
enctype="multipart/form-data">
    {{csrf_field()}}
                <fieldset>
                    <legend><h2>Edit Item</h2></legend>
                    <!-- User Name input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Item Name</label>
                        <div class="col-md-6">
                            <input id="textinput" name="item_name" type="text" placeholder="Item Name"
                                   class="form-control input-md" required value="{{$item->item_name}}">
                        </div>
                    </div>

                    <!-- Email input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Description</label>
                        <div class="col-md-6">
                            <input id="textinput" name="description" type="text"
                               placeholder="Description Item" class="form-control input-md" required
                               value="{{$item->description}}">
                        </div>
                    </div>
                    <!-- price input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Price</label>
                        <div class="col-md-6">
                            <input id="textinput" name="price" type="text" placeholder="Price" 
                            class="form-control input-md" required  value="{{$item->price}}">
                        </div>
                    </div>
                    <!-- Country input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Country Made</label>
                        <div class="col-md-6">
                            <input id="textinput" name="country_made" type="text" placeholder="Country Made" 
                            class="form-control input-md" required value="{{$item->country_made}}">
                        </div>
                    </div>
                    <!-- status input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Status</label>
                        <div class="col-md-6">
                            <select name="status" class="form-control" required>
                                
                                <option value="1" @if($item->status == 1) selected @endif>New</option>
                                <option value="2" @if($item->status == 2) selected @endif>Like New</option>
                                <option value="3" @if($item->status == 3) selected @endif>Used</option>
                                <option value="4" @if($item->status == 4) selected @endif>Very Old</option>
                            </select>
                        </div>
                    </div>
                    <!-- rating input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Rating</label>
                        <div class="col-md-6">
                            <select name="rating" class="form-control">
                                
                                <option value="1" @if($item->rating == 1) selected @endif>*</option>
                                <option value="2" @if($item->rating == 2) selected @endif>**</option>
                                <option value="3" @if($item->rating == 3) selected @endif>***</option>
                                <option value="4" @if($item->rating == 4) selected @endif>****</option>
                                <option value="5" @if($item->rating == 5) selected @endif>*****</option>
                            </select>
                        </div>
                    </div>
                     <!-- uesr input-->
                    <!-- <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Users</label>
                        <div class="col-md-6">
                            <select name="user" class="form-control">
                                
                            </select>
                        </div>
                    </div> -->
                    <!-- uesr input-->
                    <!-- <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Categories</label>
                        <div class="col-md-6">
                            <select name="categories" class="form-control">
                               
                            </select>
                        </div>
                    </div> -->
                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="filebutton">Item Image</label>
                        <div class="col-md-6">
                            <input id="filebutton" name="image" class="input-file"
                                   type="file">
                        </div>
                    </div>
                </fieldset>
                <div class="box-footer">
                    <button type="submit"
                            class="btn btn-primary">Save Category
                    </button>
                </div>
            </form>

@endif
@endsection
