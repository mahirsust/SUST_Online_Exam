@extends('layouts.dashboard')
@section('title', 'Profile')
@section('content')


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
				<div class="card">
					<div class="card-body">
						<div class="col-md-10">
                            <div class="card border-grey border-lighten-2">
                                <div class="card-block">
                                    <h4 class="card-title text-xs-center">Student</h4>
                                    <h5 class="card-subtitle text-xs-center text-muted">{{ Auth::user()->name }}</h5>
                                </div>

                                @if(Auth::user()->pic_path == "-1")
                                <img class="img-fluid rounded" style="max-width: 225px; max-height: 225px;" 
                                    src="{{url('/')}}/app-assets/images/demo/img.png" alt="logo">
                                @else
                                <img class="img-fluid rounded" style="max-width: 225px; max-height: 225px;" 
                                    src="{{url('/')}}/app-assets/images/user_profile/{{$id1}}" alt="logo">
                                @endif
                                <div class="card-block">
                                    <?php
                                        $u_id=Auth::user()->id;
                                        $u_name=Auth::user()->name;
                                    ?>

                                    <ul class="list-group" align="center">
                                        <li class="list-group-item"><strong>Email :</strong> <a href="#" class="card-link">{{ Auth::user()->email }}</a></li>
                                        <li class="list-group-item"><strong>Registration No. :</strong>
                                            {{ Auth::user()->regno }}
                                        </li>
                                        <li class="list-group-item"><strong>Batch :</strong>
                                            {{ Auth::user()->batch }}
                                        </li>
                                    </ul>
                                    <div class="py-1 text-xs-center">
                                        <a href="#default" class="btn btn-outline-cyan" data-toggle="modal" 
                                            data-target="#default">Change Photo</a>
                                        <span></span>
                                        <a href="#default1" class="btn btn-outline-teal" data-toggle="modal" 
                                            data-target="#default1">Edit Profile</a>

                                        <!-- Edit Modal Start -->
                                        <div class="modal fade text-xs-left" id="default" tabindex="-1" 
                                            role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <strong><h3 class="modal-title" id="myModalLabel1">
                                                            Change Photo
                                                        </h3></strong>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form" method="POST" action="{{ url('/changepic')}}" 
                                                        enctype="multipart/form-data">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="auth_id" value="{{$u_id}}">
                                                            <div class="form-body">
                                                                <div class="form-group">
                                                                    <label><h4>Choose Photo</h4></label>
                                                                    <label id="file1" class="file center-block">
                                                                        <input type="file" id="file" name="imgfile1" class="form-control" required>
                                                                        <span class="file-custom"></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-actions">
                                                                <button type="submit" class="btn btn-info">
                                                                    Upload
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Edit Modal End -->

                                        <!-- Delete Modal Start -->
                                        <div class="modal fade text-xs-left" id="default1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        <strong><h3 class="modal-title" id="myModalLabel1">
                                                            Update Profile
                                                        </h3></strong>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form" method="POST" action="{{ url('/editprofile')}}" >
                                                            {{ csrf_field() }}
                                                            
                                                            <div class="form-body">
                                                                
                                                                <div class="form-group">
                                                                    <label for="timesheetinput1"><h4>Full Name</h4></label>
                                                                    <div class="position-relative has-icon-left">
                                                                        <input required type="text" id="timesheetinput1" class="form-control" name="editname" value="{{$u_name}}">
                                                                        <div class="form-control-position">
                                                                            <i class="icon-head"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="form-actions">
                                                                <button type="submit" class="btn btn-info">
                                                                    Update
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Delete Modal End -->
                                    </div>
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