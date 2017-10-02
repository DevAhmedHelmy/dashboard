@extends('front/layouts.master')
@section('content-header')

<header class="jumbotron my-4">
    <h1 class="display-3">A Warm Welcome!</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
    <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
	</header>

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
			                	<img  src="{{url($item->item_image)}}" alt="Not Found" 
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
			                        <td>Not Approve</td>
			                        @else
			                        <td>Approved</td>
			                        @endif
			                      </tr>
			                      <tr>
			                        <td>Date Add</td>
			                        <td>{{$item->created_at}}</td>
			                      </tr>
			                      <tr>
			                        <td>Category</td>
			                        <td><a href="/categories/{{$item->cat_id}}/show">
			                        	{{$item->category->cat_name}}</a>
			                        </td>
			                      </tr>
			                      <tr>
			                        <td>User Add</td>
			                        <td>{{$item->member->user_name}}</td>
			                      </tr>
			                      </tr>
			                     
			                    </tbody>
			                  </table>
                  
				       
			                </div>
			            </div>
				 	</div>
				<div class="panel-footer text-center">
                        
                        <span class="center-block">
                        	<a href="basket.html" class="btn btn-primary">
                        	<i class="fa fa-shopping-cart"></i> Add to cart</a>
                           
                        </span>
                    </div>
            
			</div>
		</div>
	@endif
	@endsection