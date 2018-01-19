@extends('layouts.dashboard')

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
							<?php
							$c = ceil($tot/5);
							$s = '. ';
							?>
							
							<div class="nav-vertical">
								<ul class="nav nav-tabs nav-right">
									<li class="nav-item">
										<a class="nav-link active" id="tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Q1-Q5</a>
									</li>
									@for($i=2; $i<=$c; $i++)
									<li class="nav-item">
										<a class="nav-link" id="tab{{$i}}" data-toggle="tab" aria-controls="tab{{$i}}" href="#tab{{$i}}" aria-expanded="false">Q{{($i-1)*5+1}} - Q{{$i*5}}</a>
									</li>
									@endfor
								</ul>
								<div class="tab-content px-1">
									<div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="tab1">
										<form class="form" method="POST" action="{{ url('/result')}}" >
										{{ csrf_field() }}
										<input type="hidden" name="exam_id" value={{$id}}>
										<div class="form-body">
											@foreach($que as $key => $q)
											<div class="form-group">
												<h4 style="color: blue;"><label>{{$key+1 . $s .$q->question_name}}</label></h4>
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
													<i class="icon-check2"></i> Save
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
			</div>
		</div>
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////-->

	@endsection