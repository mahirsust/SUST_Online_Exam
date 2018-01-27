<!-- navbar-fixed-top-->
<nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
  <div class="navbar-wrapper">
    <div class="navbar-header">
      <ul class="nav navbar-nav">
        <li class="nav-item mobile-menu hidden-md-up float-xs-left">
          <a class="nav-link nav-menu-main menu-toggle hidden-xs">
            <i class="icon-menu5 font-large-1"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('/')}}" class="navbar-brand nav-link">
            <img alt="branding logo" src="{{url('/')}}/app-assets/images/logo/2017-11-17.png"
            data-expand="{{url('/')}}/app-assets/images/logo/2017-11-17.png"
            data-collapse="{{url('/')}}/app-assets/images/logo/robust-logo-small.png" class="brand-logo">
          </a>
        </li>
        <li class="nav-item hidden-md-up float-xs-right">
          <a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container">
            <i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i>
          </a>
        </li>
      </ul>
    </div>
    <div class="navbar-container content container-fluid">
      <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
        <ul class="nav navbar-nav">
          <li class="nav-item hidden-sm-down">
            <a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5"></i>
            </a>
          </li>
        </ul>

        <ul class="nav navbar-nav float-xs-right">
                          
          <li class="dropdown dropdown-user nav-item">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
              <span class="avatar avatar-online">
                <?php
                    $u_pic=Auth::user()->pic_path;
                ?>
                @if(Auth::user()->pic_path == "-1")
                <img src="{{url('/')}}/app-assets/images/demo/img.png" alt="avatar">
                @else
                <img src="{{url('/')}}/app-assets/images/user_profile/{{$u_pic}}" alt="avatar">
                @endif
                <i></i>
              </span>
              <span class="user-name">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                              
              @if(Auth::user()->user_category=="admin")          
              <a href="{{ url('/profile') }}" class="dropdown-item"><i class="icon-head"></i>
                Profile
              </a>
              @elseif(Auth::user()->user_category=="student")
              <a href="{{ url('/userprofile') }}" class="dropdown-item"><i class="icon-head"></i>
                Profile
              </a>
              @else
              @endif
              
              <div class="dropdown-divider"></div>

              <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                  class="dropdown-item">
                <i class="icon-power3"></i>
                  Logout
              </a>

              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>

            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>

        <!-- ////////////////////////////////////////////////////////////////////////////-->