<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body>
        <div id="all">
            @include('includes.header')
            @yield('content')
        </div>
        @include('includes.footer')
        @yield('jsfiles')
    </body>
</html>
