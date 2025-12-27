<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Lang;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Session::has('language')){
            Session::put ('language',config('app.locale'));
        }

        Lang::setlocale(Session::get('language'));

        return $next($request);
    }
}
