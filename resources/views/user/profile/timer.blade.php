@extends('layouts.dashboard')
@section('title', 'Time')
@section('content')
{{ Html::style('app-assets/css/timercss.css') }}
<div class="app-content content container-fluid">
	<div class="content-wrapper">
	    <div class="content-body">
		    <div class="row">
		                
		        <div class="col-xs-12">
							<?php
								$request=$num;
							?>
		        	<div class="card">
		        		@if($diff>0)
						<div class="card-header">
							<h4 class="card-title text-xs-center">Exam Will Be Starts On...</h4>
						</div>
						@else
							<div class="card-header">
								<h4 class="card-title text-xs-center">Go To The Exam...</h4>
							</div>
							<form id="frm2" method="get" action="{{ url('/quiz/'.$request) }}">
					    		{{ csrf_field() }}
					    		
					    	</form>
						@endif
						<div class="card-body text-xs-center">
		            
				        
					        <form>
					    	<input type="hidden" id="dat1" name="data" value="{{$diff}}">
					    	</form>
					        <!-- <div class="card-body">
								<div class="clock" style="position: center;" onload="countdown()"></div>
								<div class="message"></div>
							</div> -->
							
							<form id="frm" method="get" action="{{ url('/quiz/'.$request) }}">
					    		{{ csrf_field() }}
					    		
					    	</form>
					    	@if($diff>0)
							<div id="clockdiv" style="padding-top: 50px;">
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
								<form id="frm1" method="get" action="{{ url('/quiz/'.$request) }}">
						    		{{ csrf_field() }}
						    		
						    	</form>
							@endif
						</div>
				    </div>
		        </div>
		    </div>
		</div>
	</div>
</div>

<script type="text/javascript">
	document.getElementById("frm1").submit();
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

<!-- ////////////////////////////////////////////////////////////////////////////-->

@endsection