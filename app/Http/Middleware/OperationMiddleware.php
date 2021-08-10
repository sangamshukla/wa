<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OperationMiddleware
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
<<<<<<< HEAD
        //dd(auth()->user());
=======
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
        if (auth()->user()->role!=='operation') {
            if (auth()->user()->role!=='admin') {
                return redirect('/');
            }
        }
        return $next($request);
    }
}
