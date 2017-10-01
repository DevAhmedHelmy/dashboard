@extends('admin/layouts.master')
@section('content-header')

	<h1>
	Categories
	<small>Show All Categories</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="/home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li class="active"><a href="/categories"><i class="fa fa-comment"></i> Comments</a></li>
		
	</ol>

@endsection
@section('content')
    <div class="row">
    	<div class="col-xs-12">
    		<table class="table table-striped">
			  <thead>
			    <tr>
			      <th>Comment</th>
			      <th>Item Name</th>
			      <th>User Name</th>
			      <th>Created At</th>
			      <th>Status</th>
			      <th>Control</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@if(! empty($comments))
				  	@foreach($comments as $comment)
					    <tr>
					      <td>{{ $comment->comment }}</td>
					      <td>{{ $comment->item_name }}</td>
					      <td>{{ $comment->user_name }}</td>
					      <td>{{ $comment->created_at }}</td>
					      @if( $comment->status  == 0 )
					      <td>Not Active</td>
					      @else
					      <td>Active</td>
					      @endif
					      <td>
                          <a href="/comments/{{$comment->id}}/edit" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                              Edit
                          </a>
                        <a href="/comments/{{$comment->id}}/delete" onclick="if(!confirm('Do You Want To Delete This Book ?')) return false;" class="btn btn-danger btn-xs">
                                <i class="fa fa-times" aria-hidden="true"></i> Del</a>
                      </td>
					    </tr>
				    @endforeach
			    @endif
			    
			  </tbody>
			</table>
    	</div>
    </div>


@endsection

