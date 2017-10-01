@extends('admin/layouts.master')
@section('content-header')

	<h1>
	Categories
	<small>Show All Categories</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="/home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li class="active"><a href="/categories"><i class="fa fa-paw"></i> Categories</a></li>
		
	</ol>

@endsection

	
@section('content')
	<div class="row">
        <div class="col-xs-12">
            <a href="/categories/create" class="btn btn-primary btn-lg"> Add New Categories</a>
        </div>
    </div>
    <div class="row">
    	<div class="col-xs-12">
    		<table class="table table-striped">
			  <thead>
			    <tr>
			      <th>Category Name</th>
			      <th>Description</th>
			      <th>Ordering</th>
			      <th>Visibility</th>
			      <th>Allow Commenting</th>
			      <th>Allow Adds</th>
			      <th>Control</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@if(! empty($categories))
				  	@foreach($categories as $category)
					    <tr>
					      <td><a href="/categories/{{ $category->id }}/show">{{ $category->cat_name }}</a></td>
					      <td>{{ $category->description }}</td>
					      <td>{{ $category->ordering }}</td>
					      @if( $category->visiblity  == 0 )
					      <td>Not Visibility</td>
					      @else
					      <td>Visibility</td>
					      @endif

					      @if( $category->allow_comment == 0)
					      <td>Not Comment</td>
					      @else
					      <td>Comment</td>
					      @endif

					      @if( $category->allow_adds == 0)
					      <td>Not Adds</td>
					      @else
					      <td>adds</td>
					      @endif
					     
					      <td>
                          <a href="/categories/{{$category->id}}/edit" class="btn btn-primary btn-xs">
                              <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                              Edit
                          </a>
                        <a href="/categories/{{$category->id}}/delete" onclick="if(!confirm('Do You Want To Delete This Book ?')) return false;" class="btn btn-danger btn-xs">
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

