@extends('layouts.dashboard')

@section('content')

<div class="app-content content container-fluid">
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-md-6 col-xs-12 mb-1">
				<h2 class="content-header-title">NoticeBoard</h2>
			</div>
			<div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
				<div class="breadcrumb-wrapper col-xs-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
						</li>
						<li class="breadcrumb-item active">Notice
						</li>
					</ol>
				</div>
			</div>
		</div>

		<div class="content-body"><!-- Basic Tables start -->
			<div class="row">
				<div class="col-xs-10">
					
					<form method="POST" action="{{ url('/notice/save') }}">
                        {{csrf_field()}}
                        
                        
						<div class="form-group">
							<textarea id="userinput8" rows="5" class="form-control border-danger"
							 name="write_notice" placeholder="write your notice"></textarea>
						</div>
						<div class="mb-1">
							<a href="{{url('/CreateCourse')}}">
								<button type="submit" class="btn btn-danger">Post</button>
							</a>
						</div>	
					</form>		
				
				<!-- latest_posts -->
	                <tr>
	                    <td>
	                        <section class="card">
	                        	<div class="card-header">
									<h2 class="card-title" style="color: #b22222;">
										November 10, 2017: Web Engineering Lab Project - Submission #01 (One)
									</h2>
									<td>few seconds ago</td>
								</div>
	                            <div class="card-body">
	                                <div class="card-block">
	                                    
	                                
		                                <p >
		                                    <!-- nl2br post post_body   --> 
		                                Hope you are doing well. 
		                                This is to inform you that you have to submit a progress report of your project by this week 
		                            	<br>
										Please organize your report as follows:<br>
										Project Title: Mention the name of your project (web app) you are going to develop. <br>
										Project Team (Name, Student Number, Email, Mobile): Your team details.<br>
										Current updates: Provide a List - What have you done so far / How far have you progressed / What you have implemented  etc...<br>
										Overall Progress : The progress of your project (in percentage, i.e 45% / 65% ...). <br>
										Provide some screenshots of what you have implemented so far.  <br>
										Finally mention whether you can complete your project by the first week of January 2018 or not.
										</p>
		                                <div>
		                                    <div>

		                                        <button
		                                           id="edit"
		                                           class="btn btn-sm btn-warning">
		                                           <!-- //data-toggle="modal"
		                                           //post id post id
		                                           //post body post post_body
		                                           //data action edit -->
		                                           
		                                            Edit
		                                        </button>

		                                        <span></span>
		                                        <button
		                                           id="edit"
		                                           class="btn btn-sm btn-danger">
		                                           <!-- //data-toggle="modal"
		                                           //post id post id
		                                           //post body post post_body
		                                           //data action edit -->
		                                           
		                                            Delete
		                                        </button>
		                                    </div>
		                                </div>
		                            </div>
	                            </div>
	                        </section>
	                    </td>
	                </tr>
            <!-- for -->
            	</div>
			</div>
		</div>
	</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

@endsection