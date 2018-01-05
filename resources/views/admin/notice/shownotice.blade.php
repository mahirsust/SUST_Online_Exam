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
						<li class="breadcrumb-item"><a href="{{url('/noticelist')}}">Notice</a>
						</li>
						<li class="breadcrumb-item active">NoticeBoard
						</li>
					</ol>
				</div>
			</div>
		</div>

		<div class="content-body"><!-- Basic Tables start -->
			<div class="row">
				<div class="col-xs-10">
					
					<div class="mb-1">
						<a href="{{url('/CreateNotice/'.$cid_number)}}">
							<button type="button" class="btn btn-success">Add Notice</button>
						</a>
					</div>
				<!-- latest_posts -->
				@foreach($coursenotice as $cnotice)
	                <tr>
	                    <td>
	                        <section class="card">
	                        	<div class="card-header">
									<h2 class="card-title" style="color: green;"><!-- //color: #b22222;" -->
										{{$cnotice->t_notice_title}} 
										<!-- November 10, 2017: Web Engineering Lab Project - Submission #01 (One) -->
									</h2>
									<td>{{$cnotice->updated_at}}</td>
								</div>
	                            <div class="card-body">
	                                <div class="card-block">
	                                      
	                                    <p>{{$cnotice->t_notice}}</p>       
		                                <!-- <p >
		                                    
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
										</p> -->
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
	                @endforeach
            <!-- for -->
            	</div>
			</div>
		</div>
	</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

@endsection