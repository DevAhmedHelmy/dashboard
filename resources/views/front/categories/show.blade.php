@extends('front/layouts.master')
@section('content')
<div class="row">
	@if(isset($categories))
	<div class="col-md-3">
		<h1>Shop</h1>
		<div class="list-group">
			@foreach ($categories as $category)
				<a href="/categories/{{$category->id}}/show"  class="list-group-item">{{$category->cat_name}}</a>
			@endforeach
	</div>
</div>
@endif

<div class="col-md-9">
			@if(isset($items))
			<div class="row">
				
					@foreach ($items as $item)
				<div class="col-lg-4 col-md-6 mb-4">
		              <div class="card h-100">
		                <a href="categories/{{$item->id}}/details"><img class="card-img-top img-responsive" alt="" src="/{{$item->item_image}}"></a>
		                <div class="card-body text-center">
		                  <h4 class="card-title">
		                    <a href="/items/{{$item->id}}/show">{{$item->item_name}}</a>
		                  </h4>
							<p>{{$item->description}}</p>
		                  <h5>$ {{$item->price}}</h5>
		                  <p>{{$item->created_at}}</p>
		                  <p class="buttons">
                                <a href="/items/{{$item->id}}/show" class="btn btn-default">View detail</a>
                                <a href="basket.html" class="btn btn-primary">
                                <i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </p>
		                </div>
		                <div class="card-footer text-center">
		                  <small class="text-muted">★ ★ ★ ★ ☆</small>
		                </div>
		              </div>
            	</div>
             @endforeach
            @endif
            	
			

		</div>
	</div>
@endsection