@extends('layouts.dashboard')
@section('title', 'Courses')
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
						<li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
						</li>
						<li class="breadcrumb-item active">Exam
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
						<a href="{{url('/CreateCourse')}}">
							<button type="button" class="btn btn-success">Add Course</button>
						</a>
					</div>
					<div class="card">
						
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered mb-0">
									<thead>
										<tr scope="row" align="center">
											<th class="text-center">ID</th>
											<th class="text-center">Course Name</th>
											<th class="text-center">Course Code</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($courses as $key=>$c)
										<tr>
											<th scope="row">{{$key+1}}</th>
											<td>{{$c->t_coursename}}</td>
											<td>{{$c->t_coursecode}}</td>
											<td class="col-sm">
												<a  style="margin-right: 20px;" href="{{ url('/exam/'.$c->id) }}" class="btn btn-info">Enter</a>
												<a href="{{ url('/editCourse/'.$c->id) }}" class="btn btn-info">Edit</a>
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