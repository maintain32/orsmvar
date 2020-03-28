<!doctype html>
<html>
    <head>
        @include('includes.front.head')
        @yield('cssfiles')
    </head>
    <body>
        @include('includes.front.header')
        @yield('content')
        @include('includes.front.footer')
        @yield('jsfiles')
    </body>
</html>
