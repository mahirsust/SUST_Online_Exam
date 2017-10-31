<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">

@include('includes.header')

<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

  
	@include('includes.topbar')

    @include('includes.sidebar')

    @yield('content')

	@include('includes.footer')  	

</body>
</html>
