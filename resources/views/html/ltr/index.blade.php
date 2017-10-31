<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content="PIXINVENT">
  <title>Admin Dashboard</title>
  <link rel="apple-touch-icon" sizes="60x60" href="app-assets/images/ico/apple-icon-60.png">
  <link rel="apple-touch-icon" sizes="76x76" href="app-assets/images/ico/apple-icon-76.png">
  <link rel="apple-touch-icon" sizes="120x120" href="app-assets/images/ico/apple-icon-120.png">
  <link rel="apple-touch-icon" sizes="152x152" href="app-assets/images/ico/apple-icon-152.png">
  <link rel="shortcut icon" type="image/png" href="favicon.ico">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
  <!-- font icons-->
  <link rel="stylesheet" type="text/css" href="app-assets/fonts/icomoon.css">
  <link rel="stylesheet" type="text/css" href="app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/pace.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN ROBUST CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
  <!-- END ROBUST CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

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
          <img alt="branding logo" src="app-assets/images/logo/robust-logo-light.png"
           data-expand="app-assets/images/logo/robust-logo-light.png"
           data-collapse="app-assets/images/logo/robust-logo-small.png" class="brand-logo">
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
        <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>

      </ul>
    <ul class="nav navbar-nav float-xs-right">

  <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-bell4"></i><span class="tag tag-pill tag-default tag-danger tag-default tag-up">5</span></a>
    <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
      <li class="dropdown-menu-header">
        <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag tag tag-default tag-danger float-xs-right m-0">5 New</span></h6>
      </li>
      <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
        <div class="media">
          <div class="media-left valign-middle"><i class="icon-cart3 icon-bg-circle bg-cyan"></i></div>
          <div class="media-body">
            <h6 class="media-heading">You have new order!</h6>
            <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
              <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">30 minutes ago</time></small>
            </div>
          </div></a><a href="javascript:void(0)" class="list-group-item">
            <div class="media">
              <div class="media-left valign-middle"><i class="icon-monitor3 icon-bg-circle bg-red bg-darken-1"></i></div>
              <div class="media-body">
                <h6 class="media-heading red darken-1">99% Server load</h6>
                <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                  <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Five hour ago</time></small>
                </div>
              </div></a><a href="javascript:void(0)" class="list-group-item">
                <div class="media">
                  <div class="media-left valign-middle"><i class="icon-server2 icon-bg-circle bg-yellow bg-darken-3"></i></div>
                  <div class="media-body">
                    <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                    <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                      <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                    </div>
                  </div></a><a href="javascript:void(0)" class="list-group-item">
                    <div class="media">
                      <div class="media-left valign-middle"><i class="icon-check2 icon-bg-circle bg-green bg-accent-3"></i></div>
                      <div class="media-body">
                        <h6 class="media-heading">Complete the task</h6><small>
                          <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last week</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                        <div class="media">
                          <div class="media-left valign-middle"><i class="icon-bar-graph-2 icon-bg-circle bg-teal"></i></div>
                          <div class="media-body">
                            <h6 class="media-heading">Generate monthly report</h6><small>
                              <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Last month</time></small>
                            </div>
                          </div></a></li>
                          <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all notifications</a></li>
                        </ul>
                      </li>
      <li class="dropdown dropdown-notification nav-item"><a href="#" data-toggle="dropdown" class="nav-link nav-link-label"><i class="ficon icon-mail6"></i><span class="tag tag-pill tag-default tag-info tag-default tag-up">8</span></a>
        <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
          <li class="dropdown-menu-header">
            <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span class="notification-tag tag tag-default tag-info float-xs-right m-0">4 New</span></h6>
          </li>
          <li class="list-group scrollable-container"><a href="javascript:void(0)" class="list-group-item">
            <div class="media">
              <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></div>
              <div class="media-body">
                <h6 class="media-heading">Margaret Govan</h6>
                <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start the project.</p><small>
                  <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Today</time></small>
                </div>
              </div></a><a href="javascript:void(0)" class="list-group-item">
                <div class="media">
                  <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                  <div class="media-body">
                    <h6 class="media-heading">Bret Lezama</h6>
                    <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                      <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Tuesday</time></small>
                    </div>
                  </div></a><a href="javascript:void(0)" class="list-group-item">
                    <div class="media">
                      <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                      <div class="media-body">
                        <h6 class="media-heading">Carie Berra</h6>
                        <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                          <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">Friday</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)" class="list-group-item">
                        <div class="media">
                          <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                          <div class="media-body">
                            <h6 class="media-heading">Eric Alsobrook</h6>
                            <p class="notification-text font-small-3 text-muted">We have project party this saturday night.</p><small>
                              <time datetime="2015-06-11T18:29:20+08:00" class="media-meta text-muted">last month</time></small>
                            </div>
                          </div></a></li>
                          <li class="dropdown-menu-footer"><a href="javascript:void(0)" class="dropdown-item text-muted text-xs-center">Read all messages</a></li>
                        </ul>
                      </li>
                      <li class="dropdown dropdown-user nav-item">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                          <span class="avatar avatar-online">
                            <img src="app-assets/images/portrait/small/sust.png" alt="avatar"><i></i>
                          </span>
                          <span class="user-name">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a href="#" class="dropdown-item"><i class="icon-head"></i>
                             Edit Profile
                          </a>
                          <a href="#" class="dropdown-item"><i class="icon-mail6"></i>
                             My Inbox
                          </a>
                          <a href="#" class="dropdown-item"><i class="icon-clipboard2"></i>
                             Task
                          </a>

                          <div class="dropdown-divider"></div>

                          <a href="{{ url('/logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"
                          class="dropdown-item"><i class="icon-power3"></i>
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


          <!-- main menu-->
          <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">

            <!-- main menu content-->
            <div class="main-menu-content">
              <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                <li class="nav-item">
                  <a href="{{ url('/dashboard') }}"><i class="icon-dashboard"></i>
                    <span data-i18n="nav.dash.main" class="menu-title">Admin Dashboard</span>
                  </a>
                </li>

                <li class=" nav-item">
                <a href="#"><i class="icon-server"></i>
                  <span data-i18n="nav.page_layouts.main" class="menu-title">Profile</span>
                </a>
                </li>

                <li class=" nav-item">
                  <a href="#"><i class="icon-book2"></i>
                    <span data-i18n="nav.project.main" class="menu-title">Courses</span>
                  </a>
                </li>

                <li class=" nav-item">
                  <a href="#"><i class="icon-question-circle"></i>
                    <span data-i18n="nav.cards.main" class="menu-title">Question Set</span>
                  </a>
                </li>

                <li class=" nav-item">
                  <a href="#"><i class="icon-file-text3"></i>
                    <span data-i18n="nav.advance_cards.main" class="menu-title">Exams</span>
                  </a>
                </li>

                <li class=" nav-item">
                  <a href="#"><i class="icon-bell3"></i>
                    <span data-i18n="nav.content.main" class="menu-title">Notice</span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- /main menu content-->
            <!-- main menu footer-->
            <!-- include includes/menu-footer-->
            <!-- main menu footer-->
          </div>
          <!-- / main menu-->

      <div class="app-content content container-fluid">
        <div class="content-wrapper">
          <div class="content-header row">
          </div>
          <div class="content-body"><!-- stats -->
            <div class="row">
              <div class="col-xl-3 col-lg-6 col-xs-12">
                <div class="card">
                  <div class="card-body">
                    <div class="card-block">
                      <div class="media">
                        <div class="media-body text-xs-left">
                          <h3 class="blue">278</h3>
                          <span>Courses</span>
                        </div>
                        <div class="media-right media-middle">
                          <i class="icon-briefcase3 blue font-large-2 float-xs-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-xs-12">
                <div class="card">
                  <div class="card-body">
                    <div class="card-block">
                      <div class="media">
                        <div class="media-body text-xs-left">
                          <h3 class="teal">156</h3>
                          <span>Exams</span>
                        </div>
                        <div class="media-right media-middle">
                          <i class="icon-ios-paper teal font-large-2 float-xs-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-xs-12">
                <div class="card">
                  <div class="card-body">
                    <div class="card-block">
                      <div class="media">
                        <div class="media-body text-xs-left">
                          <h3 class="deep-orange">68</h3>
                          <span>Question Set</span>
                        </div>
                        <div class="media-right media-middle">
                          <i class="icon-ios-help deep-orange font-large-2 float-xs-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 col-xs-12">
                <div class="card">
                  <div class="card-body">
                    <div class="card-block">
                      <div class="media">
                        <div class="media-body text-xs-left">
                          <h3 class="red">423</h3>
                          <span>Participates</span>
                        </div>
                        <div class="media-right media-middle">
                          <i class="icon-ios-people red font-large-2 float-xs-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ stats -->
            <!--/ project charts -->
            <div class="row">
              <div class="col-xl-8 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <ul class="list-inline text-xs-center pt-2 m-0">
                      <li class="mr-1">
                        <h6><i class="icon-circle warning"></i> <span class="grey darken-1">Remaining</span></h6>
                      </li>
                      <li class="mr-1">
                        <h6><i class="icon-circle success"></i> <span class="grey darken-1">Completed</span></h6>
                      </li>
                    </ul>
                    <div class="chartjs height-250">
                      <canvas id="line-stacked-area" height="250"></canvas>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="row">
                      <div class="col-xs-3 text-xs-center">
                        <span class="text-muted">Total Projects</span>
                        <h2 class="block font-weight-normal">18</h2>
                        <progress class="progress progress-xs mt-2 progress-success" value="70" max="100"></progress>
                      </div>
                      <div class="col-xs-3 text-xs-center">
                        <span class="text-muted">Total Task</span>
                        <h2 class="block font-weight-normal">125</h2>
                        <progress class="progress progress-xs mt-2 progress-success" value="40" max="100"></progress>
                      </div>
                      <div class="col-xs-3 text-xs-center">
                        <span class="text-muted">Completed Task</span>
                        <h2 class="block font-weight-normal">242</h2>
                        <progress class="progress progress-xs mt-2 progress-success" value="60" max="100"></progress>
                      </div>
                      <div class="col-xs-3 text-xs-center">
                        <span class="text-muted">Total Revenue</span>
                        <h2 class="block font-weight-normal">$11,582</h2>
                        <progress class="progress progress-xs mt-2 progress-success" value="90" max="100"></progress>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-12">
                <div class="card card-inverse bg-info">
                  <div class="card-body">
                    <div class="position-relative">
                      <div class="chart-title position-absolute mt-2 ml-2 white">
                        <h1 class="display-4">84%</h1>
                        <span>Employees Satisfied</span>
                      </div>
                      <canvas id="emp-satisfaction" class="height-400 block"></canvas>
                      <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3 white">
                        <a href="#" class="btn bg-info bg-darken-3 mr-1 white">Statistics <i class="icon-stats-bars"></i></a> for the last year.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ project charts -->
            <!-- Recent invoice with Statistics -->
            <div class="row match-height">
              <div class="col-xl-4 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="media">
                      <div class="p-2 text-xs-center bg-deep-orange media-left media-middle">
                        <i class="icon-user1 font-large-2 white"></i>
                      </div>
                      <div class="p-2 media-body">
                        <h5 class="deep-orange">New Users</h5>
                        <h5 class="text-bold-400">1,22,356</h5>
                        <progress class="progress progress-sm progress-deep-orange mt-1 mb-0" value="45" max="100"></progress>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="media">
                      <div class="p-2 text-xs-center bg-cyan media-left media-middle">
                        <i class="icon-camera7 font-large-2 white"></i>
                      </div>
                      <div class="p-2 media-body">
                        <h5>New Products</h5>
                        <h5 class="text-bold-400">28</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <div class="media">
                      <div class="p-2 media-body text-xs-left">
                        <h5>New Users</h5>
                        <h5 class="text-bold-400">1,22,356</h5>
                      </div>
                      <div class="p-2 text-xs-center bg-teal media-right media-middle">
                        <i class="icon-user1 font-large-2 white"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Recent Invoices</h4>
                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                    <div class="heading-elements">
                      <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="card-block">
                      <p>Total paid invoices 240, unpaid 150. <span class="float-xs-right"><a href="#">Invoice Summary <i class="icon-arrow-right2"></i></a></span></p>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-hover mb-0">
                        <thead>
                          <tr>
                            <th>Invoice#</th>
                            <th>Customer Name</th>
                            <th>Status</th>
                            <th>Due</th>
                            <th>Amount</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-truncate"><a href="#">INV-001001</a></td>
                            <td class="text-truncate">Elizabeth W.</td>
                            <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                            <td class="text-truncate">10/05/2016</td>
                            <td class="text-truncate">$ 1200.00</td>
                          </tr>
                          <tr>
                            <td class="text-truncate"><a href="#">INV-001012</a></td>
                            <td class="text-truncate">Andrew D.</td>
                            <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                            <td class="text-truncate">20/07/2016</td>
                            <td class="text-truncate">$ 152.00</td>
                          </tr>
                          <tr>
                            <td class="text-truncate"><a href="#">INV-001401</a></td>
                            <td class="text-truncate">Megan S.</td>
                            <td class="text-truncate"><span class="tag tag-default tag-success">Paid</span></td>
                            <td class="text-truncate">16/11/2016</td>
                            <td class="text-truncate">$ 1450.00</td>
                          </tr>
                          <tr>
                            <td class="text-truncate"><a href="#">INV-01112</a></td>
                            <td class="text-truncate">Doris R.</td>
                            <td class="text-truncate"><span class="tag tag-default tag-warning">Overdue</span></td>
                            <td class="text-truncate">11/12/2016</td>
                            <td class="text-truncate">$ 5685.00</td>
                          </tr>
                          <tr>
                            <td class="text-truncate"><a href="#">INV-008101</a></td>
                            <td class="text-truncate">Walter R.</td>
                            <td class="text-truncate"><span class="tag tag-default tag-warning">Overdue</span></td>
                            <td class="text-truncate">18/05/2016</td>
                            <td class="text-truncate">$ 685.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Recent invoice with Statistics -->

            </div>
          </div>
        </div>
      </div>
          <!-- ////////////////////////////////////////////////////////////////////////////-->


  <footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix text-muted text-sm-center mb-0 px-2"><span class="float-md-left d-xs-block d-md-inline-block">Copyright  &copy; 2017 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="text-bold-800 grey darken-2">PIXINVENT </a>, All rights reserved. </span><span class="float-md-right d-xs-block d-md-inline-block">Hand-crafted & Made with <i class="icon-heart5 pink"></i></span></p>
  </footer>

  <!-- BEGIN VENDOR JS-->
  <script src="app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
  <script src="app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
  <script src="app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN ROBUST JS-->
  <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="app-assets/js/core/app.js" type="text/javascript"></script>
  <!-- END ROBUST JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="app-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>
