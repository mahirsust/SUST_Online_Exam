@extends('layouts.welcome')
@section('title', 'Register')
@section('content')

<!-- Twitter Bootstrs CSS -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="registerform/css/bootstrap.min.css">
<link rel="stylesheet" href="homepage/css/main.css">
<link rel="stylesheet" href="homepage/css/ionicons.min.css">
<link rel="stylesheet" href="registerform/css/style.css">


<section id="login">
<div class="container">
    <!-- <div class="row"> -->
        <div class="col-sm-12">
            <div class="form-wrap">

                <h1>Register a new account</h1>
                <form class="form-horizontal" method="POST" action="{{ route('register') }}"  autocomplete="off"
                    style="color: white;">

                    {{ csrf_field() }}

                        <input type="hidden" name="user_category" value="student">
                        <input type="hidden" name="pic_path" value="-1">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('batch') ? ' has-error' : '' }}">
                            <label for="batch" class="col-md-4 control-label">Batch</label>

                            <div class="col-md-8">
                                <input id="batch" type="text" class="form-control" name="batch" value="{{ old('batch') }}" required autofocus>

                                @if ($errors->has('batch'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('batch') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('regno') ? ' has-error' : '' }}">
                            <label for="regno" class="col-md-4 control-label">Registration No.</label>

                            <div class="col-md-8">
                                <input id="regno" type="text" class="form-control" name="regno" value="{{ old('regno') }}" required autofocus>

                                @if ($errors->has('regno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('regno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
        <!-- </div>        -->
    </div><!-- /.container-->
</section><!-- /#login -->
<div id="particles-js"></div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script  src="registerform/js/index.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
@endsection