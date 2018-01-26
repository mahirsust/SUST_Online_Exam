@extends('layouts.dashboard')
@section('title', 'Result')
@section('content')


<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">Result</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/userdashboard')}}">Dashboard</a>
						</li>
						<li class="breadcrumb-item active">Result
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
                                    
                                    <h1 class="card-subtitle text-xs-center"><strong><u>Result - Web TT2</u></strong></h1>
                    
                                </div>
                                <div class="card-block">
                                    
                                    <h2 class="card-subtitle text-xs-center"><strong>{{Auth::user()->name}}</strong></h2>

                                </div>
                                <div class="card-block text-xs-center">
                                    <dt class="text-truncate">
                                    <h4><strong>Total Marks :</strong>
                                            20
                                    </h4>

                                    <h4><strong>Correct Answer :</strong>
                                            18
                                    </h4>
                                    
                                    <h4><strong>Wrong Answer :</strong>
                                            1
                                    </h4>

                                    <h4><strong>Percentage :</strong>
                                            98%
                                    </h4>

                                    <h4><strong>Unanswered :</strong>
                                            1
                                    </h4>

                                    <h4><strong>All Answer :</strong>
                                        <a href="#" class="card-link">Go Get All Answer!!</a>
                                    </h4>

                                    <div class="py-1 text-xs-center">
                                        
                                        <a href="#default1" class="btn btn-info" data-toggle="modal" data-target="#default1">
                                            PDF
                                        </a>
                                    </div>
                                </dt>
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