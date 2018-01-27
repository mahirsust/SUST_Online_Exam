@extends('layouts.dashboard')
@section('title', 'Notice(Courses)')
@section('content')

<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">Courses</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/userdashboard')}}">Dashboard</a>
						</li>
						<li class="breadcrumb-item active">Courses
						</li>
					</ol>
				</div>
			</div>
		</div>

		@if(Session::has('alert-success'))
		<div class="alert alert-success alert-dismissable fade in">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>{{ Session::get('alert-success') }}</strong>
		</div>
		@endif
		<div class="content-body"><!-- Basic Tables start -->
			<div class="row">
				<div class="col-xs-12">
					
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Course List</h4>
						</div>
						<div class="card-body">
							
							<div class="table-responsive">
								<table class="table table-bordered mb-0">
									<thead>
										<?php
											$inc=0;
										?>
										<tr scope="row" align="center">
											<th>ID</th>
											<th>Teacher Name</th>
											<th>Course Name</th>
											<th>Course Code</th>
											<th>Batch</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

										@foreach($courses as $c)
										<?php
											$user_name=App\User::find($c->t_id);
											$name=$user_name->name;
										?>
										<tr>
											<th scope="row">{{$inc=$inc+1}}</th>
											<td>{{$name}}</td>
											<td>{{$c->t_coursename}}</td>
											<td>{{$c->t_coursecode}}</td>
											<td>{{$c->t_batch}}</td>
											<td>
												<a href="{{ url('/allnotices/'.$c->id) }}" class="btn btn-info">Enter</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

@endsection