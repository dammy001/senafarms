<?php

namespace DLG\Http\Middleware;

use Closure;
use Auth;

class CheckCustomer
{

    public function handle($request, Closure $next)
    {
        if (!Auth::guard('customer')->check())
        {
            return redirect('unauthorized');
        }

        return $next($request);
    }
}
