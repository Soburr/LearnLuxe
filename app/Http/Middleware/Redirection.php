<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Redirection
{

    public function handle(Request $request, Closure $next, ...$guards)
    {
        foreach ($guards as $guard) {
           if(Auth::guard($guard)->check()) {
              if ($guard == 'admin') {
                return redirect('/admin/dashboard');
              } elseif ($guard == 'student') {
                return redirect('/student/dashboard');
              }
           } else {
            return redirect('/');
           }
        }
        return $next($request);
    }
}
