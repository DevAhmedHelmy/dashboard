@extends('admin/layouts.master')
@section('content-header')

	<h1>
	Members
	<small>Show Members Details</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="/members"><i class="fa fa-dashboard"></i> Members</a></li>
		<li class="active"><i class="fa fa-users"></i> Member Details</li>
		
	</ol>

@endsection

	
@section('content')
	@if(isset($member))
		<div class="member-data">
			<div class="row">
				 <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
				 	<div class="panel panel-info">
			            <div class="panel-heading">
			              <h3 class="panel-title">{{$member->user_name}} Profile</h3>
		           		</div>
		           		<div class="panel-body">
			              <div class="row">
			                <div class="col-md-3 col-lg-3 " align="center"> 
			                	<img  src="/{{$member->image}}" alt="Not Found" 
			                	class="img-circle img-responsive"> 
			                </div>
			                <div class=" col-md-9 col-lg-9 "> 
			                  <table class="table table-user-information">
			                    <tbody>
			                      <tr>
			                        <td>User Name:</td>
			                        <td>{{$member->user_name}}</td>
			                      </tr>
			                      <tr>
			                        <td>Email</td>
			                        <td><a href="mailto:info@support.com">{{$member->email}}</a></td>
			                      </tr>
			                      <tr>
			                        <td>Full Name</td>
			                        <td>{{$member->full_name}}</td>
			                      </tr>
			                   
			                         <tr>
			                             <tr>
			                        <td>Group ID</td>
			                        @if($member->group_id == 0)
			                        <td>Member</td>
			                        @else
			                        <td>Admin</td>
			                        @endif
			                      </tr>
			                        <tr>
			                        <td>Home Address</td>
			                        @if($member->reg_status == 0)
			                        <td><a href="/newMembers/{{$member->id}}/active">Not Active</a></td>
			                        @else
			                        <td><a href="/newMembers/{{$member->id}}/notactive">Active</a></td>
			                        @endif
			                      </tr>
			                      <tr>
			                        <td>Register at</td>
			                        <td>{{$member->created_at}}</td>
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
                            <a href="/members/{{$member->id}}/edit" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="/members/{{$member->id}}/delete" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
			</div>
		</div>
	@endif
@endsection