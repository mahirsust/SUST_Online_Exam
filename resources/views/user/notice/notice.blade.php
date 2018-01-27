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
						<li class="breadcrumb-item"><a href="{{url('/userdashboard')}}">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="{{url('/unotice_course')}}">Course Notice</a>
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
					
				<!-- latest_posts -->
				@foreach($course_notice as $cnotice)
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
		                                     
		                            </div>
	                            </div>
	                        </section>
	                    </td>
	                </tr>
	            @endforeach
	            <!-- for -->
	            &nbsp;&nbsp;
		            <div class="text-xs-center">
		            	{!! $course_notice->links('vendor.pagination.bootstrap-4') !!}
		            </div>
						
            	</div>
			</div>
		</div>
	</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

@endsection