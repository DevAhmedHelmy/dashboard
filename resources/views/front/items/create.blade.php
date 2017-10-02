@extends('front/layouts.master')
@section('content-header')

<header class="jumbotron my-4">
    <h1 class="display-3">A Warm Welcome!</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
    <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
    </header>

@endsection

@section('content')
<form class="form-horizontal" method="POST" action="/items" enctype="multipart/form-data">
    {{csrf_field()}}
                <fieldset>
                    <legend><h2>Add Item</h2></legend>
                    <!-- User Name input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Item Name</label>
                        <div class="col-md-6">
                            <input id="textinput" name="item_name" type="text" placeholder="Item Name"
                                   class="form-control input-md" required>
                        </div>
                    </div>

                    <!-- Email input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Description</label>
                        <div class="col-md-6">
                            <input id="textinput" name="description" type="text"
                               placeholder="Description Item" class="form-control input-md" required>
                        </div>
                    </div>
                    <!-- price input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Price</label>
                        <div class="col-md-6">
                            <input id="textinput" name="price" type="text" placeholder="Price" 
                            class="form-control input-md" required>
                        </div>
                    </div>
                    <!-- Country input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Country Made</label>
                        <div class="col-md-6">
                            <input id="textinput" name="country_made" type="text" placeholder="Country Made" 
                            class="form-control input-md" required>
                        </div>
                    </div>
                    <!-- status input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Status</label>
                        <div class="col-md-6">
                            <select name="status" class="form-control" required>
                                <option value="0">...</option>
                                <option value="1">New</option>
                                <option value="2">Like New</option>
                                <option value="3">Used</option>
                                <option value="4">Very Old</option>
                            </select>
                        </div>
                    </div>
                    <!-- rating input-->
                   <!--  <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Rating</label>
                        <div class="col-md-6">
                            <select name="rating" class="form-control">
                                <option value="0">...</option>
                                <option value="1">*</option>
                                <option value="2">**</option>
                                <option value="3">***</option>
                                <option value="4">****</option>
                                <option value="5">*****</option>
                            </select>
                        </div>
                    </div> -->
                     
                    <!-- uesr input-->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="textinput">Categories</label>
                        <div class="col-md-6">
                            <select name="categories" class="form-control">
                                @foreach($categories as $category)
                                     <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
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


@endsection
