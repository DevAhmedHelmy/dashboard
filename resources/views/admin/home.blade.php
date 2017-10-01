@extends('admin/layouts.master')
@section('content-header')

	<h1>
	Dashboard
	<small>Control In The Website</small>
	</h1>
	<ol class="breadcrumb">
		<li class="active"><a href="/home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		
	</ol>

@endsection
@section('content')
<div class="row">
	<div class="col-md-3 col-sm-6 col-xs-12">
	      <div class="info-box">
	        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

	        <div class="info-box-content">
	          <span class="info-box-text">Total Members</span>
	          <span class="info-box-number">{{ $active }}</span>
	          <a href="/members" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	        </div>
	        <!-- /.info-box-content -->
	      </div>
	      <!-- /.info-box -->
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
	      <div class="info-box">
	        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

	        <div class="info-box-content">
	          <span class="info-box-text">New Members</span>
	          <span class="info-box-number">{{ $inactive }}</span>
	          <a href="/newMembers" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	        </div>
	        <!-- /.info-box-content -->
	      </div>
	      <!-- /.info-box -->
	</div>
	<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-bag"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Items</span>
              <span class="info-box-number">{{$item}}</span>
              <a href="/items" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>

            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
       </div>
	<div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion-ios-chatbubble-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Comments</span>
              <span class="info-box-number">{{$comment}}</span>
              <a href="/comments" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
       </div>
</div>
<div class="row">
	<div class="col-md-6">
	      <!-- USERS LIST -->
	      <div class="box box-danger">
	        <div class="box-header with-border">
	          <h3 class="box-title">Latest Members</h3>

	          <div class="box-tools pull-right">
	            <span class="label label-danger">8 New Members</span>
	            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
	            </button>
	            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
	            </button>
	          </div>
	        </div>
	        <!-- /.box-header -->
	        <div class="box-body no-padding">
	          <ul class="users-list clearfix">
	          @foreach($members as $member)
	            <li>
	              <img src="{{ $member->image }}" alt="User Image" width="50" height="70">
	              <a class="users-list-name" href="/members/{{$member->id}}/show">
	              	{{ $member->user_name }}</a>
	              <span class="users-list-date">{{ $member->created_at }}</span>
	            </li>
	            @endforeach
	          </ul>
	          <!-- /.users-list -->
	        </div>
	        <!-- /.box-body -->
	        <div class="box-footer text-center">
	          <a href="members" class="uppercase">View All Members</a>
	        </div>
	        <!-- /.box-footer -->
	      </div>
	      <!--/.box -->
	</div>
	<div class="col-md-6">
	      <!-- USERS LIST -->
	      <div class="box box-danger">
	        <div class="box-header with-border">
	          <h3 class="box-title">Latest Items</h3>

	          <div class="box-tools pull-right">
	           
	            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
	            </button>
	            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
	            </button>
	          </div>
	        </div>
	        <!-- /.box-header -->
	        <div class="box-body no-padding">
	          <ul class="users-list clearfix">
	          @foreach($ltestItems as $item)
	            <li>
	              <img src="{{ $item->item_image }}" alt="User Image" width="50" height="70">
	              <a class="users-list-name" href="/items/{{$item->id}}/show">{{ $item->item_name }}</a>
	              <span class="users-list-date">{{ $item->created_at }}</span>
	            </li>
	            @endforeach
	          </ul>
	          <!-- /.users-list -->
	        </div>
	        <!-- /.box-body -->
	        <div class="box-footer text-center">
	          <a href="/items" class="uppercase">View All Items</a>
	        </div>
	        <!-- /.box-footer -->
	      </div>
	      <!--/.box -->
	</div>
</div>

@endsection
