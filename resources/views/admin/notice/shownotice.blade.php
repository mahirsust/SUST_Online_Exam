@extends('layouts.dashboard')
@section('title', 'NoticeBoard')
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
		                                
		                                <div>
		                                    <div>

		                                        <button
		                                           id="edit" type="button"
		                                           class="btn btn-sm btn-warning" data-toggle="modal" 
		                                           data-target="#default{{$cnotice->id}}">
		                                          
		                                            Edit
		                                        </button>

		                                        <span></span>
		                                        <button
		                                           id="delete" type="button"
		                                           class="btn btn-sm btn-danger" data-toggle="modal" 
		                                           data-target="#default1{{$cnotice->id}}">
		                                           <!-- //data-toggle="modal"
		                                           //post id post id
		                                           //post body post post_body
		                                           //data action edit -->
		                                           
		                                            Delete
		                                        </button>

		                                        <!-- Edit Modal -->
                                                <div class="modal fade text-xs-left" id="default{{$cnotice->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <h4 class="modal-title" id="myModalLabel1">Edit Notice</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="form" method="POST" action="{{ url('/editNotice')}}" >
																	{{ csrf_field() }}
																	<input type="hidden" name="notic_id" value="{{$cnotice->id}}">
																	<input type="hidden" name="cours_id" value="{{$cnotice->c_id}}">
																	<div class="form-body">
																		<div class="form-group">
																			<label for="timesheetinput1"><h4>Notice Title</h4></label>
																			<div class="position-relative has-icon-left">
																				<input required type="text" id="timesheetinput1" class="form-control" name="edit_title" value="{{$cnotice->t_notice_title}}">
																				<div class="form-control-position">
																					<i class="icon-head"></i>
																				</div>
																			</div>
																		</div>

																		<div class="form-group">
																			<label for="timesheetinput2"><h4>Notice Description</h4></label>
																			<div class="position-relative has-icon-left">
																				<textarea required type="text" id="timesheetinput2" class="form-control" name="edit_description">{{$cnotice->t_notice}}</textarea>
																				<div class="form-control-position">
																					<i class="icon-briefcase4"></i>
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

                                                <!-- Delete Modal Start -->
                                                <div class="modal fade text-xs-left" id="default1{{$cnotice->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <strong><h3 class="modal-title" id="myModalLabel1">
                                                                	Are you sure?
                                                            	</h3></strong>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="form" method="POST" action="{{ url('/deleteNotice')}}" >
																	{{ csrf_field() }}
																	<input type="hidden" name="notic_id" value="{{$cnotice->id}}">
																	<input type="hidden" name="cours_id" value="{{$cnotice->c_id}}">
																	<div class="form-body">
																		
																		<button type="submit" class="btn btn-danger">
																			Delete
																		</button>
																		<button type="submit" data-dismiss="modal" class="btn btn-secondary btn-md">
														                	CANCEL
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
	                        </section>
	                    </td>
	                </tr>
	            @endforeach
	            <!-- for -->
	            &nbsp;&nbsp;
		            <div class="text-xs-center">
		            	{!! $coursenotice->links('vendor.pagination.bootstrap-4') !!}
		            </div>
						
            	</div>
			</div>
		</div>
	</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

@endsection