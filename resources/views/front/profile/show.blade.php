@extends('front/layouts.master')
@section('content-header')

<header class="jumbotron my-4">
    <h1 class="display-3">A Warm Welcome!</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
    <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
	</header>

@endsection
@section('content')

@if(isset($user))
<div class="panel panel-primary">
			<div class="panel-heading">
				My Information
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-9 information">
						<ul class="list-unstyled">
					<li>
						<i class="fa fa-unlock-alt fa-fw"></i>
						<span>User Name</span> : {{auth()->user()->user_name}}						
					</li>
					<li>
						<i class="fa fa-envelope-o fa-fw"></i>
						<span>Email</span> : {{auth()->user()->email}}					
					</li>
					<li>
						<i class="fa fa-user fa-fw"></i>
						<span>Full Name</span> : {{auth()->user()->full_name}}					
					</li>
					<li>
						<i class="fa fa-calendar fa-fw"></i>
						<span>Registered Date</span> : {{auth()->user()->created_at}}					
					</li>
					
				</ul>
					</div>
					<div class="col-md-3">
							<div class="text-center">
							  	<img src="{{url(auth()->user()->image)}}" class="rounded" alt="Not Found"
							  	width="170" height="150">
							</div>
					</div>
				</div>
				
			</div>
		</div>
@endif


<div class="panel panel-primary">
	@if(! empty($items))
			<div class="panel-heading">
				My Adds
			</div>
			<div class="panel-body">
				<div class="row">
					@foreach($items as $item)
					<div class="col-md-3 col-sm-4 mb-4">
	              	<div class="card h-100">
	              		@if($item->approve == 0)
  	                	<span>Not Approved</span>
  	                	@endif
    	                <a href="/items/{{$item->id}}/show"><img class="card-img-top img-responsive" alt="" 
    	                		src="{{url($item->item_image)}}"></a>

	                <div class="card-body">
	                  <h4 class="card-title">
	                    <a href="/items/{{$item->id}}/show">{{$item->item_name}}</a>
	                  </h4>
	                  <p></p><h5>{{$item->description}}}</h5><p></p>
	                  <h5>$ {{$item->price}}}</h5>
	                  <p>{{$item->created_at}}}</p>
	                  <p class="buttons">
                            <a href="#" class="btn btn-default"><i class="fa fa-edit"></i> Edit Item</a>
                            <a href="#" onclick="if(!confirm('Do You Want To Delete This Item ?'))
                                       return false;" class="btn btn-primary">
                            <i class="fa fa-trash-o"></i> Delete Item</a>
                        </p>
	                </div>
	                
	              </div>
        	</div>
        	@endforeach

        	
			</div>
			@endif
        	<p>Not Found The Ads <a href="/{{auth()->user()->user_name}}/items/create/">New Ads</a></p>
			
			</div>

		</div>

	
@endsection