@extends('layouts.dashboard')
@section('title', 'ExamList(Course)')
@section('content')

<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">{{$course}}</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
						</li>
						<li class="breadcrumb-item active">
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
					<div class="mb-1">
						<a href="{{url('/CreateExam/'.$c_id)}}">
							<button type="button" class="btn btn-success">Create Exam</button>
						</a>
					</div>
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Exam List</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered mb-0">
									<thead>
										<tr scope="row" align="center">
											<th>ID</th>
											<th>Exam Name</th>
											<th>Start Time</th>
											<th>Duration</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($exams as $e)
										<?php
											$dd = date_create($e->start_time);
											$d = date_create($e->start_time);

											$end = $dd->add(new DateInterval('PT'. $e->duration . 'M'));
											$end = date_format($end, "d F, Y h:i A");
											$start = date_format($d, "d F, Y h:i A");
											
											date_default_timezone_set('Asia/Dhaka');
											$cur = date("Y-m-d H:i:s");
											
										?>
										<tr>
											<th scope="row">{{$e->id}}</th>
											<td>{{$e->name}}</td>
											<td>{{$start}}</td>
											<td>{{$e->duration}}</td>
											<td><a href="{{ url('/editExam/' .$e->id) }}" class="btn btn-info">Edit</a></td>
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