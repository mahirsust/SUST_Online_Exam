@extends('layouts.dashboard')
@section('title', 'Results')
@section('content')

<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">Exam</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/userdashboard')}}">Dashboard</a>
						</li>
						<li class="breadcrumb-item active">Results
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
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered mb-0">
									<thead>
										<tr scope="row" align="center">
											<th>ID</th>
											<th>Course Name</th>
											<th>Exam Name</th>
											<th>Marks</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($res as $key=>$r)
										<tr>
											<th scope="row">{{$key+1}}</th>
											<td>{{$r->exam->course->t_coursename}}</td>
											<td>{{$r->exam->name}}</td>
											<td>{{$r->marks}} out of {{$r->total}}</td>
											<td>
												<form class="form" method="POST" action="{{ url('/answers')}}" >
													{{ csrf_field() }}
													<input type="hidden" name="ans_id" value="{{$r->exam->q_id}}">												
														<button type="submit" class="btn btn-info">
															Enter
														</button>
													
												</form>	
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