@extends('layouts.dashboard')

@section('content')

  
<style type="text/css">
	.main-section{
	border:1px solid #138496;
	background-color: #fff;
}
.profile-header{
	background-color: #17a2b8;
	height:150px;
}
.user-detail{
	margin:-50px 0px 30px 0px;
}
.user-detail img{
	height:100px;
	width:100px;
}
.user-detail h5{
	margin:15px 0px 5px 0px;
}
</style>
<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">Profile</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/userdashboard')}}">Dashboard</a>
						</li>
						<li class="breadcrumb-item active">Profile
						</li>
					</ol>
				</div>
			</div>
		</div>

		<div class="content-body"><!-- Basic Tables start -->
			<div class="row">
				<div class="col-xl-6 col-md-10 col-sm-12">
					<div class="card">
						<div class="card-body">
							<div class="card-block">
								<img class="card-img img-fluid mb-1" src="app-assets/images/carousel/08.jpg" alt="Card image cap">
								<h2 class="card-title">{{ Auth::user()->name }}</h2>
								
								<h4 class="card-title">Email :</h4><strong>{{ Auth::user()->email }}</strong>
								<h4 class="card-title">Registration No. :</h4><strong>{{ Auth::user()->regno }}</strong>
								<h4 class="card-title">Batch :</h4><strong>{{ Auth::user()->batch }}</strong>

								<a href="#" class="btn btn-outline-cyan">Change Photo</a>
								<a href="#" class="btn btn-outline-teal">Edit Profile</a>
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