@extends('layouts.dashboard')

@section('content')

<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">Add Course</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="{{url('/course')}}">Courses</a>
						</li>
						<li class="breadcrumb-item active">Edit Course
						</li>
					</ol>
				</div>
			</div>
		</div>
		
		<div class="content-body"><!-- Basic Tables start -->
			<div class="row">
				<div class="col-md-11">
					<div class="card">
						<?php
							$id = Auth::user()->id;
						?>
						<div class="card-body collapse in">
							<div class="card-block">

								<form class="form" method="POST" action="{{ url('/saveCourse1')}}" >
									{{ csrf_field() }}
									<input type="hidden" name="id" value="{{$course->id}}">
									<div class="form-body">
										<div class="form-group">
											<label for="timesheetinput1">Course Name</label>
											<div class="position-relative has-icon-left">
												<input type="text" id="timesheetinput1" class="form-control" value="{{$course->t_coursename}}" Name" name="coursename" required>
												<div class="form-control-position">
													<i class="icon-head"></i>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="timesheetinput2">Course Code</label>
											<div class="position-relative has-icon-left">
												<input type="text" id="timesheetinput2" class="form-control" value="{{$course->t_coursecode}}" name="coursecode" required>
												<div class="form-control-position">
													<i class="icon-briefcase4"></i>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="timesheetinput3">Batch</label>
											<div class="position-relative has-icon-left">
												<select class="form-control" id="timesheetinput3" name="batch" required>
													<option value="2013">2013</option>
													<option value="2014">2014</option>
													<option value="2015">2015</option>
													<option value="2016">2016</option>
												</select>
												<div class="form-control-position">
													<i class="icon-file2"></i>
												</div>
											</div>
										</div>

									</div>

									<div class="form-actions">
										<button type="submit" class="btn btn-info">
											<i class="icon-check2"></i> Save
										</button>
									</div>
								</form>

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