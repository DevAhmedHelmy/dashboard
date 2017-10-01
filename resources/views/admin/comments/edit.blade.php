@extends('admin/layouts.master')
@section('content-header')

	<h1>
	Comments
	<small>Edit Comments</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="/comments"><i class="fa fa-paw"></i> Comments</a></li>
		<li class="active"><i class="fa fa-plus"></i> Edit Comments</li>
		
	</ol>

@endsection


@section('content')
@if(isset($comment))
	<form class="form-horizontal" method="POST" action="{{ route('commentUpdate',['id'=>$comment->id]) }}"  
			enctype="multipart/form-data">
        {{csrf_field()}}
        <fieldset>
            <legend><h2>Edit Comment</h2></legend>
            <!-- User Name input-->
            <div class="form-group">
                <label class="col-md-2 control-label" for="textinput">Comment</label>
                <div class="col-md-6">
                    <textarea name="comment" class="form-control">{{$comment->comment}}</textarea>
                </div>
            </div>

           
           
           
          
        </fieldset>
        <div class="form-group">
        	<label class="col-md-2 control-label" for="">Save Comment</label>
        	<div class="col-md-6">
        		<button type="submit"
                    class="btn btn-primary">Save Comment
            </button>
        	</div>
            
        </div>
    </form>
@endif
@include('admin/errors/list')
@endsection