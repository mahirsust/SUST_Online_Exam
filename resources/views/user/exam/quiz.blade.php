@extends('layouts.dashboard')
@section('title', 'Quiz')
@section('content')

<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">All Questions</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/userdashboard')}}">Dashboard</a>
						</li>
						<li class="breadcrumb-item active">All Questions
						</li>
					</ol>
				</div>
			</div>
		</div>

		<div class="content-body">
			<div class="row">
				<div class="col-xs-9">
					<div class="card">
						<div class="card-header">
							<h1 class="card-title" style="color: red;">
								Web Engineering
							</h1>
						</div>
						<div class="card-block">
							<form class="form" method="POST" action="{{ url('/result')}}" >
								{{ csrf_field() }}
								<input type="hidden" name="exam_id" value={{$id}}>
								<input type="hidden" name="total" value={{$tot}}>
								<div class="form-body">
									@foreach($que as $key => $q)
									<div class="form-group">
										<h4 style="color: blue;"><label>Q{{$key+1}}. {{$q->question_name}}</label></h4>
										<?php
										$op = str_getcsv($q->option);
										?>
										<h6>
											<div class="input-group">
												@foreach($op as $o)
												<label class="display-inline-block custom-control custom-radio ml-1">
													<input type="radio" name="{{$key}}" value="{{$o}}" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">{{$o}}</span>
												</label>
												@endforeach
											</div>
										</h6>
									</div>
									@endforeach
									<div class="form-actions">
										<button type="submit" class="btn btn-info">
											<i class="icon-check2"></i> Submit
										</button>
									</div>
								</div>
								<br>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////-->

	@endsection