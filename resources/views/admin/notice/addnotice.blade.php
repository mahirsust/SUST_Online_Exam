@extends('layouts.dashboard')
@section('title', 'Add Notice')
@section('content')

<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">Add Notice</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="{{url('/noticelist')}}">Notice</a>
						</li>
						<li class="breadcrumb-item active">Add Notice
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

								<form class="form" method="POST" action="{{ url('/saveNotice')}}" >
									{{ csrf_field() }}
									<input type="hidden" name="course_id" value={{$request}}>
									<div class="form-body">
										<div class="form-group">
											<label for="timesheetinput1"><h4>Notice Title</h4></label>
											<div class="position-relative has-icon-left">
												<input required type="text" id="timesheetinput1" class="form-control" placeholder="Web Term Test" name="ntitle">
												<div class="form-control-position">
													<i class="icon-head"></i>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label for="timesheetinput2"><h4>Notice Description</h4></label>
											<div class="position-relative has-icon-left">
												<textarea required type="text" id="timesheetinput2" class="form-control" placeholder="17-01-17 Term Test Happened" name="ndescription"></textarea>
												<div class="form-control-position">
													<i class="icon-briefcase4"></i>
												</div>
											</div>
										</div>

									</div>
									
									<div class="form-actions">
										<button type="submit" class="btn btn-danger">
											Post
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