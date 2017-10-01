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
	@if(isset($category))
		<div class="member-data">
			<div class="row">
				 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
				 	<div class="panel panel-info">
			            <div class="panel-heading">
			              <h3 class="panel-title">{{$category->cat_name}} Details</h3>
		           		</div>
		           		<div class="panel-body">
			              <div class="row">
			                
			                <div class=" col-md-12 col-lg-12 "> 
			                  <table class="table table-user-information">
			                    <tbody>
			                      <tr>
			                        <td>Category Name:</td>
			                        <td>{{$category->cat_name}}</td>
			                      </tr>
			                      <tr>
			                        <td>Description</td>
			                        <td>{{$category->description}}</td>
			                      </tr>
			                      
	                   			
			                         <tr>
			                         	<tr>
			                        <td>Visibility</td>
			                        @if($category->visible == 0)
			                        <td><a href="/categories/{{$category->id}}/visible">Visible</a>
			                        </td>
			                        @else
			                        <td><a href="/categories/{{$category->id}}/notVisible">Not Visible
			                        </a>
			                        </td>
			                        @endif

			                      </tr>
		                             <tr>
			                        <td>Allow Comment</td>
			                        @if($category->allow_comment == 0)
			                        <td><a href="/categories/{{$category->id}}/allowComment">Allow Comment</a>
			                        </td>
			                        @else
			                        <td><a href="/categories/{{$category->id}}/notAllowComment">Not Allow Comment
			                        </a>
			                        </td>
			                        @endif

			                      </tr>
			                      <tr>
			                        <td>Allow Adds</td>
			                        @if($category->allow_adds == 0)
			                        <td><a href="/categories/{{$category->id}}/allowadds"> Allow Adds</a>
			                        </td>
			                        @else
			                        <td><a href="/categories/{{$category->id}}/notAllowAdds">Not Allow Adds
			                        </a>
			                        </td>
			                        @endif

			                      </tr>
			                        
			                      <tr>
			                        <td>Date Add</td>
			                        <td>{{$category->created_at}}</td>
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
                            <a href="/categories/{{$category->id}}/edit" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="/categories/{{$category->id}}/delete" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
			</div>
		</div>
	@endif
@endsection