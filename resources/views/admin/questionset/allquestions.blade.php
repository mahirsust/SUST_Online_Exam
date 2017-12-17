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
						<li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a>
						</li>
						<li class="breadcrumb-item"><a href="{{url('/questionset')}}">Question Set</a>
						</li>
						<li class="breadcrumb-item active">All Questions
						</li>
					</ol>
				</div>
			</div>
		</div>

		<div class="content-body">
			<div class="row">
				<div class="col-xs-12">
					<div class="card">
						<div class="card-header">
							<h1 class="card-title" style="color: red;">
								@foreach ($q_sets as $q_set)
            						{{$q_set->t_question_set_name}}
            					@endforeach
							</h1>
						</div>
						<div class="card-body" style="margin-left: 20px;">
							<?php
								$inc=0;
								$arr = array("a", "b", "c", "d", "e");
							?>

							@foreach($questions as $q)
							<div>
								<?php
									$inc=$inc+1;
									$options = explode(',', $q->option);
									$op_num=0;
								?>
								<h4 style="color: blue;">{{$inc}}. {{$q->question_name}}</h4>

								<h6>
								@foreach($options as $option1)
    								{{$arr[$op_num]}}) {{$option1}}
    								<?php
									$op_num=$op_num+1;
								?>
    							@endforeach
    							</h6>

								<h4 style="color: green;">Answer: {{$q->answer}}</h4>
								<br>
							</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

@endsection