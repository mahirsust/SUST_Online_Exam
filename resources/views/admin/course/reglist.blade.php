@extends('layouts.dashboard')

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
							<h4 class="card-title">Striped rows</h4>
							<a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
							<div class="heading-elements">
								<ul class="list-inline mb-0">
									<li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
									<li><a data-action="reload"><i class="icon-reload"></i></a></li>
									<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
									<li><a data-action="close"><i class="icon-cross2"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="card-body collapse in">
							<!-- <div class="card-block card-dashboard">
								<p class="card-text">Use <code class="highlighter-rouge">.table-striped</code> to add zebra-striping to any table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>. This styling doesn't work in IE8 and below as <code>:nth-child</code> CSS selector isn't supported.</p>
							</div> -->
							<div class="table-responsive">
								<table class="table table-bordered table-hover mb-0">
									<thead>
										<tr>
											<th align="center">#</th>
											<th>Registration No</th>
											<th>Name</th>
										</tr>
									</thead>
									<tbody>
										
										<tr>
											<td align="center">1</td>
											<td align="center">2013331009</td>
											<td align="center">Nishat Tasnim Ahmed Meem</td>
										</tr>
										<tr>
											<td align="center">1</td>
											<td align="center">2013331028</td>
											<td align="center">Muhammad Mahir Hasan Chowdhury</td>
										</tr>
										<tr>
											<td align="center">1</td>
											<td align="center">2013331037</td>
											<td align="center">Fowzia Yesmin</td>
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