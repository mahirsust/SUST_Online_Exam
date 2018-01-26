@extends('layouts.dashboard')
@section('title', 'Add Question Set')
@section('content')

<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">Add Question Set</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="{{url('/question_set')}}">Question Set</a>
						</li>
						<li class="breadcrumb-item active">Add Question Set
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

								<form class="form" method="POST" action="{{ url('/savequestions')}}" enctype="multipart/form-data">
									{{ csrf_field() }}
									<input type="hidden" name="t_id" value={{$id}}>
									<div class="form-body">
										<div class="form-group">
											<label for="timesheetinput1">Question Set Name</label>
											<div class="position-relative has-icon-left">
												<input type="text" id="timesheetinput1" class="form-control" 
												placeholder="Web Engineering" name="qsetname" required>
												<div class="form-control-position">
													<i class="icon-head"></i>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label>Select CSV File</label>
											<label id="projectinput7" class="file center-block">
												<input type="file" id="file" name="csvfile" class="form-control" required>
												<span class="file-custom"></span>
											</label>
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