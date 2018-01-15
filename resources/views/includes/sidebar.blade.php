<!-- main menu-->
    <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">

      <!-- main menu content-->
      @if( Auth::user()-> user_category == "admin")
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class="nav-item">
            <a href="{{ url('/dashboard') }}"><i class="icon-dashboard"></i>
              <span data-i18n="nav.dash.main" class="menu-title">Admin Dashboard</span>
            </a>
          </li>

          <li class=" nav-item">
          <a href="{{ url('/profile') }}"><i class="icon-server"></i>
            <span data-i18n="nav.page_layouts.main" class="menu-title">Profile</span>
          </a>
          </li>

          <li class=" nav-item">
            <a href="{{ url('/course') }}"><i class="icon-book2"></i>
              <span data-i18n="nav.project.main" class="menu-title">Courses</span>
            </a>
          </li>

          <li class=" nav-item">
            <a href="{{ url('/question_set') }}"><i class="icon-question-circle"></i>
              <span data-i18n="nav.cards.main" class="menu-title">Question Set</span>
            </a>
          </li>

          <li class=" nav-item">
            <a href="{{ url('/examlist') }}""><i class="icon-file-text3"></i>
              <span data-i18n="nav.advance_cards.main" class="menu-title">Exams</span>
            </a>
          </li>

          <li class=" nav-item">
            <a href="{{ url('/result') }}"><i class="icon-bar-chart-o"></i>
              <span data-i18n="nav.cards.main" class="menu-title">Result</span>
            </a>
          </li>

          <li class=" nav-item">
            <a href="{{ url('/noticelist') }}"><i class="icon-bell3"></i>
              <span data-i18n="nav.content.main" class="menu-title">Notice</span>
            </a>
          </li>
        </ul>
      </div>

      @elseif( Auth::user()-> user_category == "student")
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class="nav-item">
            <a href="{{ url('/userdashboard') }}"><i class="icon-dashboard"></i>
              <span data-i18n="nav.dash.main" class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class=" nav-item">
          <a href="{{ url('/userprofile') }}"><i class="icon-server"></i>
            <span data-i18n="nav.page_layouts.main" class="menu-title">Profile</span>
          </a>
          </li>

          <li class=" nav-item">
            <a href="#"><i class="icon-book2"></i>
              <span data-i18n="nav.project.main" class="menu-title">Courses</span>
            </a>
          </li>

          <li class=" nav-item">
            <a href="{{ url('/uexams') }}"><i class="icon-question-circle"></i>
              <span data-i18n="nav.cards.main" class="menu-title">Exams</span>
            </a>
          </li>

          <li class=" nav-item">
            <a href="#""><i class="icon-file-text3"></i>
              <span data-i18n="nav.advance_cards.main" class="menu-title">Results</span>
            </a>
          </li>

          <li class=" nav-item">
            <a href="#"><i class="icon-bell3"></i>
              <span data-i18n="nav.content.main" class="menu-title">Notice</span>
            </a>
          </li>
        </ul>
      </div>

      @else
      @endif      
      <!-- /main menu content-->
      <!-- main menu footer-->
      <!-- include includes/menu-footer-->
      <!-- main menu footer-->
    </div>
<!-- / main menu-->