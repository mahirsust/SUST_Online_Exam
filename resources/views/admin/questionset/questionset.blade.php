@extends('layouts.dashboard')
@section('title', 'Question Set List')
@section('content')

<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">Question Set</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
						</li>
						<li class="breadcrumb-item active">Question Set
						</li>
					</ol>
				</div>
			</div>
		</div>

		<div class="content-body"><!-- Basic Tables start -->
			<div class="row">
				<div class="col-xs-12">
					<div class="mb-1">
						<a href="{{url('/CreateQuestionSet')}}">
							<button type="button" class="btn btn-success">Add Question Set</button>
						</a>
					</div>
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Question Set</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered mb-0">
									<thead>
										<tr scope="row" align="center">
											<th>ID</th>
											<th>Question Set</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($question_sets as $q)
										<tr>
											<th scope="row">{{$q->id}}</th>
											<td>{{$q->t_question_set_name}}</td>
											<td><a href="{{url('/AllQuestions/'.$q->id)}}" class="btn btn-info">Enter</a></td>
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