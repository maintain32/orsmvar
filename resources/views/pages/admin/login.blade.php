<!doctype html>
<html>
    <head>
        <title>orsmvar login</title>
        <link href="{{ URL::asset('/css/admin/pages/login/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('/css/admin/pages/login/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('/css/admin/pages/login/login.css') }}" rel="stylesheet" type="text/css" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <body>
        <p class="tip"></p>
        <div class="cont">
            <div class="form sign-in">
                <h2>Login</h2>
                <label>
                    <span>Username</span>
                    <input type="text" name="logUsername" id="logUsername" class="form-control input-block" tabindex="1" autocapitalize="off" autocorrect="off" autofocus="autofocus"  required>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="logPassword" id="logPw" class="form-control form-control input-block" tabindex="2"  required>
                </label>
                    <button type="button" id="loginBtn" class="submit">Sign In</button>
            </div>
            <div class="sub-cont">
                <div class="img">
                    <div class="img__text m--up">
                        <h2>Welcome Admin</h2> <hr>
                        <p>Online Reservation System for <br/> Merlita's Venue and Resort</p>
                    </div>
                    <div class="img__text m--in">
                        <h2>One of us?</h2>
                        <p>If you already has an account, just sign in. We've missed you!</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ URL::asset('js/admin/pages/login/jquery-3.3.1.min.js') }}"></script>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="{{ URL::asset('js/admin/pages/login/login.js') }}"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </body>
</html>
