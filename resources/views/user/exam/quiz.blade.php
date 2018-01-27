@extends('layouts.dashboard')
@section('title', 'Quiz')
@section('content')
{{ Html::style('app-assets/css/timercss.css') }}
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
							<h1 class="card-title text-xs-center">
								Web Engineering
							</h1>
						</div>
						<form>
					    	<input type="hidden" id="dat1" name="data" value="{{$diff}}">
					    </form>

					    <div class="card-block text-xs-center">
						@if($diff>0)
							<div id="clockdiv"  style="padding-top: 50px;">
							  <div>
							    <span class="days"></span>
							    <div class="smalltext">Days</div>
							  </div>
							  <div>
							    <span class="hours"></span>
							    <div class="smalltext">Hours</div>
							  </div>
							  <div>
							    <span class="minutes"></span>
							    <div class="smalltext">Minutes</div>
							  </div>
							  <div>
							    <span class="seconds"></span>
							    <div class="smalltext">Seconds</div>
							  </div>
							</div>
							<div style="padding-top: 100px;">
								
							</div>
						@else
						@endif
						</div>
						<div class="card-block" style="margin-left: center;">
							<form id="frm" class="form" method="POST" action="{{ url('/result')}}" >
								{{ csrf_field() }}
								<input type="hidden" name="exam_id" value={{$id}}>
								<input type="hidden" name="total" value={{$tot}}>
								<div class="form-body">
									@foreach($que as $key => $q)
									<div class="form-group">
										<h4 style="color: blue;"><label>Q{{$key+1}}. {{$q->question_name}}</label></h4>
										<?php
										$op = str_getcsv($q->option);
										?>
										<h6>
											<div class="input-group">
												@foreach($op as $o)
												<label class="display-inline-block custom-control custom-radio ml-1">
													<input type="radio" name="{{$key}}" value="{{$o}}" class="custom-control-input">
													<span class="custom-control-indicator"></span>
													<span class="custom-control-description ml-0">{{$o}}</span>
												</label>
												@endforeach
											</div>
										</h6>
									</div>
									@endforeach
									<div class="form-actions">
										<button type="submit" class="btn btn-info">
											<i class="icon-check2"></i> Submit
										</button>
									</div>
								</div>
								<br>
							</form>
						</div>
						<script type="text/javascript">
							var time = document.getElementById("dat1").value;
							if(time<=0)
								document.getElementById("frm").submit();
						</script>
						<script type="text/javascript" charset="utf-8">
	function getTimeRemaining(endtime) {
	  var t = Date.parse(endtime) - Date.parse(new Date());
	  var seconds = Math.floor((t / 1000) % 60);
	  var minutes = Math.floor((t / 1000 / 60) % 60);
	  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
	  var days = Math.floor(t / (1000 * 60 * 60 * 24));
	  return {
	    'total': t,
	    'days': days,
	    'hours': hours,
	    'minutes': minutes,
	    'seconds': seconds
	  };
	}

	function initializeClock(id, endtime) {
	  var clock = document.getElementById(id);
	  var daysSpan = clock.querySelector('.days');
	  var hoursSpan = clock.querySelector('.hours');
	  var minutesSpan = clock.querySelector('.minutes');
	  var secondsSpan = clock.querySelector('.seconds');

	  function updateClock() {
	    var t = getTimeRemaining(endtime);

	    if (t.total <= 0) {
	      clearInterval(timeinterval);
	     document.getElementById("frm").submit();
	      
	    }
	    else{
	    daysSpan.innerHTML = t.days;
	    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
	    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
	    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
		}
	    
	  }

	  updateClock();
	  var timeinterval = setInterval(updateClock, 1000);
	}

	var time = document.getElementById("dat1").value;
	var deadline = new Date(Date.parse(new Date()) + time*1000);
	//window.alert(time);

	initializeClock('clockdiv', deadline);
</script>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////-->

	@endsection