<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // dd($request->user());
        if (!$request->user()->hasRole($role)) {
            return back()->with('message', 'You are not authorised to see this page.');
        }
        return $next($request);
    }
}
