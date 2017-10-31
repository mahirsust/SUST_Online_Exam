@extends('layouts.welcome')

@section('content')

<!-- Twitter Bootstrs CSS -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="registerform/css/bootstrap.min.css">
<link rel="stylesheet" href="homepage/css/main.css">
<link rel="stylesheet" href="homepage/css/ionicons.min.css">
<link rel="stylesheet" href="loginform/css/style.css">


<section id="login">
    <div class="container">
        <!-- <div class="row"> -->
            <div class="col-sm-12">
                <div class="form-wrap">

                    <h1>Log in with your email account</h1>

                    <form class="form-horizontal" method="POST" id="login-form" action="{{ route('login') }}" autocomplete="off">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="sr-only">Email</label>
                            <input required type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com" value="{{ old('email') }}" autofocus>

                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="sr-only">Password</label>
                            <input required type="password" name="password" id="password" class="form-control" placeholder="Password">

                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <!-- <div class="checkbox">
                                <span class="character-checkbox" onclick="showPassword()"></span>
                                <span class="label">Show password</span>
                            </div> -->
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" class="label character-checkbox" name="remember"
                                    {{ old('remember') ? 'checked' : '' }}>


                                </label>
                                <span class="label">Remember password</span>
                            </div>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-block" value="Log in">
                    </form>
                    <br>
                    <span class="pull-left">
                        <a href="{{url('/register')}}" >
                            Register
                        </a>

                        <!-- Modal -->
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Forgot Password ?</h4>
                                </div>

                                <div class="modal-body">
                                    <p>Enter your e-mail address below to reset your password.</p>

                                    <input type="email" name="recovery-email" id="recovery-email" class="form-control" autocomplete="off">

                                </div>

                                <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>

                                    <button type="submit" class="btn btn-custom" >Recovery</button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- modal -->
                    </span>
                    <span class="pull-right">
                        <a data-toggle="modal" href="#myModal">Forgot your password?</a>
                    </span>
                </div>
            </div>
            <!--  </div>  -->
        </div><!-- /.container-->
    </section><!-- /#login -->

    <div id="particles-js"></div>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script  src="loginform/js/index.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script type="text/javascript">
        function showPassword() {

    var key_attr = $('#key').attr('type');

    if(key_attr != 'text') {

        $('.checkbox').addClass('show');
        $('#key').attr('type', 'text');

    } else {

        $('.checkbox').removeClass('show');
        $('#key').attr('type', 'password');

    }

}
    </script>

@endsection
