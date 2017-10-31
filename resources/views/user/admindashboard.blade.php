<!DOCTYPE html>
<html class="no-js">

   @include('welcome.header')
    <body>
        
        @include('welcome.menubar')
        
        @yield('content')

        @include('welcome.footer')
                
    </body>
</html>