<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="Admin template, SUST Online Exam, web app">

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="author" content="SUST-CSE '13">

  <title>@yield('title') - SUST OnliNE Exam</title>

  <link rel="shortcut icon" type="{{url('/')}}/image/png" href="{{url('/')}}/favicon.ico">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">

  <!-- BEGIN VENDOR CSS-->
  {{ Html::style('app-assets/css/bootstrap.css') }}
  
  <!-- font icons-->
  {{ Html::style('app-assets/fonts/icomoon.css') }}
  {{ Html::style('app-assets/fonts/flag-icon-css/css/flag-icon.min.css') }}
  {{ Html::style('app-assets/vendors/css/extensions/pace.css') }}
  <!-- END VENDOR CSS-->

  <!-- BEGIN ROBUST CSS-->
  {{ Html::style('app-assets/css/bootstrap-extended.css') }}
  {{ Html::style('app-assets/css/app.css') }}
  {{ Html::style('app-assets/css/colors.css') }}
  <!-- END ROBUST CSS-->

  <!-- BEGIN Page Level CSS-->
  {{ Html::style('app-assets/css/core/menu/menu-types/vertical-menu.css') }}
  {{ Html::style('app-assets/css/core/menu/menu-types/vertical-overlay-menu.css') }}
  {{ Html::style('app-assets/css/core/colors/palette-gradient.css') }}
  <!-- END Page Level CSS-->

  <!-- BEGIN Custom CSS-->
  {{ Html::style('assets/css/style.css') }}
  <!-- END Custom CSS-->

</head>