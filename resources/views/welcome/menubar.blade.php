<!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="{{ url('/') }}">
                            <!-- <img src="homepage/images/logo.png" alt="">
                        </a> -->

                <span style="color: #000;font-size: 40px;" >SUST</span>
                <span style="color: red;font-size: 40px;" >OnliNE</span>
                <span style="color:blue;font-size:15px;">
                Exam
                </span>
                </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="{{ url('/home') }}" >Home</a>
                            </li>
                            <!-- <li><a href="{{ url('/about') }}">About</a></li>
                            
                            <li><a href="{{ url('/feature') }}">Features</a></li>

                            <li><a href="{{ url('/contact') }}">Contact</a></li> -->

                            @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            
                            <li><a href="{{ url('/register') }}">Register</a></li>
                            @elseif( Auth::user()->user_category == "admin")
                                <li class="dropdown">
                                    <a href="{{ url('/dashboard') }}">
                                        <i class="icon-head"></i> 
                                        {{ Auth::user()->name }}
                                    </a>
                                </li>
                            @elseif( Auth::user()->user_category == "student")
                                <li class="dropdown">
                                    <a href="{{ url('/userdashboard') }}">
                                        <i class="icon-head"></i> 
                                        {{ Auth::user()->name }}
                                    </a>
                                </li>
                            @else
                            @endif

                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>