@extends('admin/layouts.master')
@section('content-header')

	<h1>
	Items
	<small>Show All Items</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="/home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li class="active"><a href="/categories"><i class="fa fa-paw"></i> Items</a></li>
		
	</ol>

@endsection

	
@section('content')
	<div class="row">
        <div class="col-xs-12">
            <a href="/items/create" class="btn btn-primary btn-lg"> Add New Items</a>
        </div>
    </div>
    @if(isset($result))
    <div class="row">
    	<div class="col-xs-12">
    		<table class="table table-striped">
			  <thead>
			    <tr>
			      <th>Items Name</th>
			      <th>Description</th>
			      <th>Price</th>
			      <th>Country Made</th>
			      <th>Image</th>
			      <th>Status</th>
			      <th>Rating</th>
			      <th>Approve</th>
			      <th>Category</th>
			      <th>User</th>
			      <th>Control</th>
			    </tr>
			  </thead>
			  <tbody>
					@foreach($result as $item)
			  	<tr>
			  		<td><a href="/items/{{$item->id}}/show">{{$item->item_name}}</a></td>
			  		<td>{{$item->description}}</td>
			  		<td>{{$item->price}}</td>
			  		<td>{{$item->country_made}}</td>
			  		<td><img src="/{{$item->item_image}}" width="50" height="50"></td>
			  		@if($item->status == 1)
			  		<td>New</td>
			  		@elseif($item->status == 2)
			  		<td>Like New</td>
			  		@elseif($item->status == 2)
			  		<td>Used</td>
			  		@else
			  		<td>Very Old</td>
			  		@endif
			  		<td>{{$item->rating}}</td>
			  	
		  			@if($item->approve == 0)
                        <td><a href="/items/{{$item->id}}/approve">Not Approve</a></td>
                        @else
                        <td><a href="/items/{{$item->id}}/notapprove">Approved</a></td>
                    @endif
			 
			  		<td><a href="/categories/{{$item->cat_id}}/show">{{$item->cat_name}}</a></td>
			  		<td><a href="/members/{{$item->member_id}}/show">{{$item->user_name}}</a></td>
			  	
					     
				      <td>
                      <a href="/items/{{$item->id}}/edit" class="btn btn-primary btn-xs">
                          <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                          Edit
                      </a>
                    <a href="/items/{{$item->id}}/delete" onclick="if(!confirm('Do You Want To Delete This Item ?')) return false;" class="btn btn-danger btn-xs">
                            <i class="fa fa-times" aria-hidden="true"></i> Del</a>
              	</td>
			    </tr>
				  
			    @endforeach
			  </tbody>
			</table>
    	</div>
    </div>
@endif

@endsection

