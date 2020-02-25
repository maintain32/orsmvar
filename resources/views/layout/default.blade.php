<!doctype html>
<html>
    <head>
        @include('includes.front.head')
    </head>
    <body>
        @include('includes.front.header')
        @yield('content')
        @include('includes.front.footer')
        @yield('jsfiles')
    </body>
</html>
