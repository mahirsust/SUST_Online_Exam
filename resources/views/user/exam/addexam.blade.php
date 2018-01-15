@extends('layouts.dashboard')

@section('content')

<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">Create Exam</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="{{url('/exam')}}">Exams</a>
						</li>
						<li class="breadcrumb-item active">Create Exam
						</li>
					</ol>
				</div>
			</div>
		</div>
		
		<div class="content-body"><!-- Basic Tables start -->
			<div class="row">
				<div class="col-md-11">
					<div class="card">
						<div class="card-body collapse in">
							<div class="card-block">

								<form class="form" method="POST" action="{{ url('/saveExam')}}" >
									{{ csrf_field() }}
									<input type="hidden" name="c_id" value={{$c_id}}>
									<div class="form-body">
										<div class="form-group">
											<label for="timesheetinput1">Exam Name</label>
											<div class="position-relative has-icon-left">
												<input type="text" id="timesheetinput1" class="form-control" placeholder="Exam Name" name="name" required>
												<div class="form-control-position">
													<i class="icon-head"></i>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="timesheetinput2">Duration (in minutes)</label>
											<div class="position-relative has-icon-left">
												<input type="text" id="timesheetinput2" class="form-control" placeholder="Duration" name="duration" required>
												<div class="form-control-position">
													<i class="icon-briefcase4"></i>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="timesheetinput3">Question Set</label>
											<div class="position-relative has-icon-left">
												<select class="form-control" id="timesheetinput3" name="q_id" required>
													@foreach($set as $s)
														<option value="{{$s->id}}">{{$s->t_question_set_name}}</option>
													@endforeach
												</select>
												<!-- <input type="text" id="timesheetinput3" class="form-control" placeholder="Batch" 
													name="batch_id"> -->
													<div class="form-control-position">
														<i class="icon-file2"></i>
													</div>
												</div>
											</div>

											<div class="form-group">
												<label for="timesheetinput3">Date</label>
												<div class="position-relative has-icon-left">
													<input type="date" id="timesheetinput3" class="form-control" name="date">
													<div class="form-control-position">
														<i class="icon-calendar5"></i>
													</div>
												</div>
											</div>

											<div class="form-group">
												<label for="timesheetinput5">Set Time</label>
												<div class="position-relative has-icon-left">
													<input type="time" id="timesheetinput5" class="form-control" name="time">
													<div class="form-control-position">
														<i class="icon-clock5"></i>
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