@extends('front/layouts.master')
@section('content-header')

<header class="jumbotron my-4">
    <h1 class="display-3">A Warm Welcome!</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
    <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
	</header>

@endsection
@section('content')
	<div class="row text-center">
		@if(isset($items))
			@foreach($items as $item)
			 	<div class="col-lg-3 col-md-6 mb-4">
		          <div class="card">
		            <img class="card-img-top" src="{{$item->item_image}}" alt="" width="250" height="250">
		            <div class="card-body">
		              <h4 class="card-title">{{ucfirst(trans($item->item_name))}}</h4>
		              <p class="card-text">{{ucfirst(trans($item->description))}}</p>
		              <p class="card-text">$ {{$item->price}}</p>
		            </div>
		            <div class="card-footer">
		              <a href="categories/{{$item->cat_id}}/show" class="btn btn-primary waves-effect waves-light">See More</a>
		            </div>
		          </div>


		        </div>
			@endforeach
			
		@endif

	</div>
@endsection