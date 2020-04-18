<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Request;

class CheckAdminAccount
{

    public function handle($request, Closure $next)
    {
        if ($request->session()->get('user.type') === 'admin') {
            return $next($request);
        }
        // no admin session
        return redirect('/login');
    }
}
