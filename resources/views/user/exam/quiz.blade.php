@extends('layouts.dashboard')

@section('content')

<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">All Questions</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/userdashboard')}}">Dashboard</a>
						</li>
						<li class="breadcrumb-item active">All Questions
						</li>
					</ol>
				</div>
			</div>
		</div>

		<div class="content-body">
			<div class="row">
				<div class="col-xs-9">
					<div class="card">
						<div class="card-header">
							<h1 class="card-title" style="color: red;">
								Web Engineering
							</h1>
						</div>
						<div class="card-block">
							<?php
								$c = ceil($tot/5);
							?>
							<div class="nav-vertical">
								<ul class="nav nav-tabs nav-right">
									<li class="nav-item">
										<a class="nav-link active" id="tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">Q1-Q5</a>
									</li>
									@for($i=2; $i<=$c; $i++)
									<li class="nav-item">
										<a class="nav-link" id="tab{{$i}}" data-toggle="tab" aria-controls="tab{{$i}}" href="#tab{{$i}}" aria-expanded="false">Q{{($i-1)*5+1}} - Q{{$i*5}}</a>
									</li>
									@endfor
								</ul>
								<div class="tab-content px-1">
									<div role="tabpanel" class="tab-pane active" id="tabVerticalRight1" aria-expanded="true" aria-labelledby="baseVerticalRight-tab1">
										<div class="form-body">
											<div class="form-group">
												<h4 style="color: blue;"><label>1. What is the name of our university?</label></h4>

												<h6>
													<div class="input-group">
														<label class="display-inline-block custom-control custom-radio ml-1">
															<input type="radio" name="customer1" class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description ml-0">BUET</span>
														</label>
														<label class="display-inline-block custom-control custom-radio">
															<input type="radio" name="customer1" checked class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description ml-0">SUST</span>
														</label>
														<label class="display-inline-block custom-control custom-radio">
															<input type="radio" name="customer1" checked class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description ml-0">DU</span>
														</label>
														<label class="display-inline-block custom-control custom-radio">
															<input type="radio" name="customer1" checked class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description ml-0">CU</span>
														</label>
														<label class="display-inline-block custom-control custom-radio">
															<input type="radio" name="customer1" checked class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description ml-0">CUET</span>
														</label>
													</div>
												</h6>
											</div>
										</div>
										
										<br>
										<div class="form-body">
											<div class="form-group">
												<h4 style="color: blue;"><label>2. Where is our university situated?</label></h4>

												<h6>
													<div class="input-group">
														<label class="display-inline-block custom-control custom-radio ml-1">
															<input type="radio" name="customer1" class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description ml-0">Chittagong</span>
														</label>
														<label class="display-inline-block custom-control custom-radio">
															<input type="radio" name="customer1" checked class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description ml-0">Sylhet</span>
														</label>
														<label class="display-inline-block custom-control custom-radio">
															<input type="radio" name="customer1" checked class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description ml-0">Dhaka</span>
														</label>
														<label class="display-inline-block custom-control custom-radio">
															<input type="radio" name="customer1" checked class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description ml-0">Khulna</span>
														</label>
													</div>
												</h6>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tabVerticalRight2" aria-labelledby="baseVerticalRight-tab2">
										<div class="form-body">
											<div class="form-group">
												<h4 style="color: blue;"><label>3. What is your batch in your department?</label></h4>

												<h6>
													<div class="input-group">
														<label class="display-inline-block custom-control custom-radio ml-1">
															<input type="radio" name="customer1" class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description ml-0">12</span>
														</label>
														<label class="display-inline-block custom-control custom-radio">
															<input type="radio" name="customer1" checked class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description ml-0">13</span>
														</label>
														<label class="display-inline-block custom-control custom-radio">
															<input type="radio" name="customer1" checked class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description ml-0">14</span>
														</label>
														<label class="display-inline-block custom-control custom-radio">
															<input type="radio" name="customer1" checked class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description ml-0">15</span>
														</label>
													</div>
												</h6>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tabVerticalRight3" aria-labelledby="baseVerticalRight-tab3">
										<div class="form-body">
											<div class="form-group">
												<h4 style="color: blue;"><label>4. How many student in your batch?</label></h4>

												<h6>
													<div class="input-group">
														<label class="display-inline-block custom-control custom-radio ml-1">
															<input type="radio" name="customer1" class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description ml-0">68</span>
														</label>
														<label class="display-inline-block custom-control custom-radio">
															<input type="radio" name="customer1" checked class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description ml-0">69</span>
														</label>
														<label class="display-inline-block custom-control custom-radio">
															<input type="radio" name="customer1" checked class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description ml-0">60</span>
														</label>
														<label class="display-inline-block custom-control custom-radio">
															<input type="radio" name="customer1" checked class="custom-control-input">
															<span class="custom-control-indicator"></span>
															<span class="custom-control-description ml-0">63</span>
														</label>
													</div>
												</h6>
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
	</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

@endsection