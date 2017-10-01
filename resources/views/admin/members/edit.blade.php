@extends('admin/layouts.master')

@section('content-header')

	<h1>
	Members
	<small>Edit New Member</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href=" /members"><i class="fa fa-users"></i> Members</a></li>
		<li class="active"><a href="#"><i class="fa fa-pencil"></i> Edit Member</a></li>
		
	</ol>
@endsection
@section('content')
<form class="form-horizontal" method="POST" action="{{ route('memberUpdate',['id'=>$members->id]) }}" enctype="multipart/form-data">
 		{!! csrf_field() !!}
        <fieldset>
        	<legend><h2>Edit {{$members->user_name}}</h2></legend>
            <!-- User Name input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Member Name</label>
                <div class="col-md-6">
                    <input id="textinput" name="user_name" type="text" placeholder="User Name"
                           class="form-control input-md" value="{{$members->user_name}}">
                </div>
            </div>

            <!-- Email input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Email</label>
                <div class="col-md-6">
                    <input id="textinput" name="email" type="email"
                           placeholder="Email" class="form-control input-md" value="{{$members->email}}">
                </div>
            </div>
            <!-- Full Name input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Full Name</label>
                <div class="col-md-6">
                    <input id="textinput" name="full_name" type="text"
                           placeholder="Full Name"
                           class="form-control input-md" value="{{$members->full_name}}">
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
            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="selectbasic">Group ID</label>
                <div class="col-md-6">
                    <select id="selectbasic" name="group_id" class="form-control">
                    	@if($members->group_id !== 1)
                        <option value="0">Member</option>
                        @endif
                        <option value="1">Admin</option>
                    </select>
                </div>
            </div>
            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="selectbasic">Trust Status</label>
                <div class="col-md-6">
                    <select id="selectbasic" name="trust_status" class="form-control">
                    	@if($members->trust_status !== 1)
                        <option value="0">good</option>
                        @endif
                        <option value="1">bad</option>
                    </select>
                </div>
            </div>
                    <!-- Select Basic -->
                     <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-2 control-label" for="selectbasic">Trust Status</label>
                <div class="col-md-6">
                    <select id="selectbasic" name="reg_status" class="form-control">
                    	@if($members->reg_status !== 1)
                        <option value="0">good</option>
                        @endif
                        <option value="1">bad</option>
                    </select>
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
                <label class="col-md-2 control-label" for="filebutton">Edit Member</label>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Save Member</button>
                </div>
        </div>
    </form>

@include('admin/errors/list')
@endsection


