<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request); {
            // Check if the user is authenticated and has an admin role
            if (Auth::check() && Auth::user()->role === 'admin') {
                return $next($request);
            }

            // If not admin, redirect to a different page (e.g., home page)
            return redirect('/home')->with('error', 'You do not have admin access.');
        }
    }
}
