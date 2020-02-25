<!doctype html>
<html>
    <head>
        @include('includes.admin.head')
        @yield('cssfiles')
    </head>
    <body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
        <div class="page-wrapper">
            @include('includes.admin.header')
            <!-- start page container -->
            <div class="page-container">
                @include('includes.sidebar')
                @yield('content')
            </div>
            @include('includes.admin.footer')
        </div>
        @include('includes.admin.foot')
        @yield('jsfiles')
    </body>
</html>
