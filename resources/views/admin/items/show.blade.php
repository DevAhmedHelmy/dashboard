@extends('admin/layouts.master')
@section('content-header')

	<h1>
	Members
	<small>Show Members Details</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="/items"><i class="fa fa-dashboard"></i> Members</a></li>
		<li class="active"><i class="fa fa-tags"></i> Item Details</li>
		
	</ol>

@endsection

	
@section('content')
	@if(isset($item))
		<div class="member-data">
			<div class="row">
				 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
				 	<div class="panel panel-info">
			            <div class="panel-heading">
			              <h3 class="panel-title">{{$item->item_name}} Details</h3>
		           		</div>
		           		<div class="panel-body">
			              <div class="row">
			                <div class="col-md-3 col-lg-3 " align="center"> 
			                	<img  src="/{{$item->item_image}}" alt="Not Found" 
			                	class="img-circle img-responsive"> 
			                </div>
			                <div class=" col-md-9 col-lg-9 "> 
			                  <table class="table table-user-information">
			                    <tbody>
			                      <tr>
			                        <td>Item Name:</td>
			                        <td>{{$item->item_name}}</td>
			                      </tr>
			                      <tr>
			                        <td>Description</td>
			                        <td>{{$item->description}}</td>
			                      </tr>
			                      <tr>
			                        <td>Price</td>
			                        <td>$ {{$item->price}}</td>
			                      </tr>
	                   			<tr>
			                        <td>Country Made</td>
			                        <td>{{$item->country_made}}</td>
			                      </tr>
			                         <tr>
			                             <tr>
			                        <td>Item Status</td>
			                        @if($item->status == 1)
			                        <td>New</td>
			                        @elseif($item->status == 2)
			                        <td>Like New</td>
			                        @elseif($item->status == 3)
			                        <td>Used</td>
									@else
			                        <td>Older</td>
			                        @endif

			                      </tr>
			                        <tr>
			                        <td>Approve</td>
			                        @if($item->approve == 0)
			                        <td><a href="/items/{{$item->id}}/approve">Not Approve</a></td>
			                        @else
			                        <td><a href="/items/{{$item->id}}/notapprove">Approved</a></td>
			                        @endif
			                      </tr>
			                      <tr>
			                        <td>Date Add</td>
			                        <td>{{$item->created_at}}</td>
			                      </tr>
			                      <tr>
			                        <td>Category</td>
			                        <td><a href="/categories/{{$item->cat_id}}/show">{{$item->cat_name}}</a>
			                        </td>
			                      </tr>
			                      <tr>
			                        <td>User Add</td>
			                        <td><a href="/members/{{$item->member_id}}/show">{{$item->user_name}}</a></td>
			                      </tr>
			                      </tr>
			                     
			                    </tbody>
			                  </table>
                  
				       
			                </div>
			            </div>
				 	</div>
				<div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="/items/{{$item->id}}/edit" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="/items/{{$item->id}}/delete" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
			</div>
		</div>
	@endif
@endsection