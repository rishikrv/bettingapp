<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class Client
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 1) {
            return redirect()->route('admin');
        }

        if (Auth::user()->role == 2) {
            return redirect()->route('supermaster');
        }

        if (Auth::user()->role == 3) {
            return redirect()->route('master');
        }

        if (Auth::user()->role == 4) {
            return redirect()->route('superagent');
        }

        if (Auth::user()->role == 5) {
            return redirect()->route('agent');
        }

        // if (Auth::user()->role == 5) {
        //     return $next($request);
        // }

        if (Auth::user()->role == 6) {
            return redirect()->route('client');
        }
    }
}
