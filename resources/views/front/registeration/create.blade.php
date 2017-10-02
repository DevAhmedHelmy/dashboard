@extends('front/layouts.master')
@section('content-header')

<header class="jumbotron my-4">
    <h1 class="display-3">A Warm Welcome!</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
    <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
    </header>

@endsection
@section('content')


<form class="form-horizontal" method="POST" action="/userRegister" 
enctype="multipart/form-data">
 		{!! csrf_field() !!}
        <fieldset>
        	<legend><h2>Add Member</h2></legend>
            <!-- User Name input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Member Name</label>
                <div class="col-md-6">
                    <input id="textinput" name="user_name" type="text" placeholder="User Name"
                           class="form-control input-md">
                </div>
            </div>

            <!-- Email input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Email</label>
                <div class="col-md-6">
                    <input id="textinput" name="email" type="email"
                           placeholder="Email" class="form-control input-md">
                </div>
            </div>
            <!-- Full Name input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Full Name</label>
                <div class="col-md-6">
                    <input id="textinput" name="full_name" type="text"
                           placeholder="Full Name"
                           class="form-control input-md">
                </div>
            </div>
            <!-- Password input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="passwordinput">Password</label>
                <div class="col-md-6">
                    <input id="passwordinput" name="password" type="password"
                           placeholder="Password" class="form-control input-md">
                </div>
            </div>  
                    <!-- File Button -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="filebutton">User Image</label>
                <div class="col-md-6">
                    <input id="filebutton" name="image" class="input-file"
                           type="file">
                </div>
            </div>
        </fieldset>
        <div class="form-group">
                <label class="col-md-2 control-label" for="filebutton">Add Member</label>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Save Member</button>
                </div>
        </div>
    </form>


@endsection