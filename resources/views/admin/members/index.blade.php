@extends('admin/layouts.master')
@section('content-header')

	<h1>
	Members
	<small>Show All Members</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="/home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li class="active"><a href=" /members"><i class="fa fa-users"></i> Members</a></li>
		
	</ol>

@endsection

	
@section('content')
	<div class="row">
        <div class="col-xs-12">
            <a href=" members/create" class="btn btn-primary btn-lg"> Add New Members</a>
        </div>
    </div>
    <div class="row">
		<div class="col-xs-12">
	    <div class="box">
	        <div class="box-header">
	            <h3 class="box-title">All Members</h3>
	        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                            <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                    Member Name
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Email
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Full
                                    Name
                                </th>
								</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                    Member Image
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                                    Login Date
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Group
                                    ID
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Trust
                                    Status
                                </th>
                                <!-- <th class="sorting" tabindex="0" aria-controls="example2"
                                    rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Reg
                                    Status
                                </th> -->
                                
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                    Control
                                </th>
                            </tr>

                            </thead>
                            	<tbody>
                            		@foreach($members as $member)
                                    <tr role="row" class="odd">
                                    <td class="sorting_1"><a href="/members/{{$member->id}}/show">{{$member->user_name}}</a></td>
                                    <td>{{$member->email}}</td>
                                    <td>{{$member->full_name}}</td>
                                    <td><img src="{{$member->image}}" width="50" height="50" alt=""></td>
                                    <td>{{$member->created_at}}</td>
                                    @if( $member->group_id == 1)
                                    	<td>Admin</td>
                                    @else
                                    	<td>Member</td>
                                    @endif
                                    @if( $member->trust_status == 1)
                                    	<td>Bad</td>
                                    @else
                                    	<td>good</td>
                                    @endif
                                    
                                    <td>
										<a class="btn btn-info btn-xs" href="/members/{{$member->id}}/edit">
											<i class="fa fa-pencil-square-o" aria-hidden="true"> </i> 
										Edit</a>
										<a href="/members/{{$member->id}}/delete" onclick="if(!confirm('Do You Want To Delete This Member ?'))
											return false;" class="btn btn-danger btn-xs">
											<i class="fa fa-times" aria-hidden="true"></i>
										 	Delete
										</a>
                                         
                                    </td>
                                </tr>
                            	@endforeach
                            </tbody>

                        </table>
	                    </div>
	                    </div>
	                    <div class="row">
		                    <div class="col-sm-5">
		                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries
		                    </div>
		                    </div>
	                    </div>
	                </div>
	            </div>
	            <!-- /.box-body -->
        	</div>
    	</div>
	</div>
@endsection

