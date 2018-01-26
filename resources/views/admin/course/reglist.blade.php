@extends('layouts.dashboard')
@section('title', 'Registered User List')
@section('content')

<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">Registerd Students in CSE 445</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="{{url('/course')}}">Courses</a>
						</li>
						<li class="breadcrumb-item active">Registered Students
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
						<div class="card-header">
							<h4 class="card-title">List of Registered Student</h4>
						</div>
						<div class="card-body">
							<!-- <div class="card-block card-dashboard">
								<p class="card-text">Use <code class="highlighter-rouge">.table-striped</code> to add zebra-striping to any table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>. This styling doesn't work in IE8 and below as <code>:nth-child</code> CSS selector isn't supported.</p>
							</div> -->
							<div class="table-responsive">
								<table class="table table-bordered mb-0">
									<thead>
										<tr>
											<th>ID</th>
											<th>Registration No</th>
											<th>Name</th>
										</tr>
									</thead>
									<tbody>
										
										<tr>
											<th>1</th>
											<td>2013331009</td>
											<td>Nishat Tasnim Ahmed Meem</td>
										</tr>
										<tr>
											<th>2</th>
											<td>2013331028</td>
											<td>Muhammad Mahir Hasan Chowdhury</td>
										</tr>
										<tr>
											<th>3</th>
											<td>2013331037</td>
											<td>Fowzia Yesmin</td>
										</tr>
										
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