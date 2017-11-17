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
						<li class="breadcrumb-item active">Add Course
						</li>
					</ol>
				</div>
			</div>
		</div>
		
		<div class="content-body"><!-- Basic Tables start -->
			<div class="row">
				<div class="col-xs-12">
					<div class="card">

						<div class="card-body collapse in">
							<div class="card-block">

								<form class="form">
									<div class="form-body">

										<div class="form-group">
											<label for="timesheetinput1">Course Name</label>
											<div class="position-relative has-icon-left">
												<input type="text" id="timesheetinput1" class="form-control" placeholder="Web Lab" name="coursename">
												<div class="form-control-position">
													<i class="icon-head"></i>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="timesheetinput2">Course Code</label>
											<div class="position-relative has-icon-left">
												<input type="text" id="timesheetinput2" class="form-control" placeholder="CSE 446" name="coursecode">
												<div class="form-control-position">
													<i class="icon-briefcase4"></i>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="timesheetinput3">Batch</label>
											<div class="position-relative has-icon-left">
												<input type="text" id="timesheetinput3" class="form-control" placeholder="2013" 
													name="batch_id">
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