<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!empty(Auth::check() && Auth::user()->is_admin == 'admin')){
            return $next($request);
        }else{
            Auth::logout();
            session()->flash('error', 'You are not authorized to access this page');
            return redirect()->route('login.index');
        }
    }
}
