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
        // Check if the user is authenticated and has a user_type of 1 (admin)
        if (Auth::check() && Auth::user()->type == 1) {
            return $next($request);
        }

        // If not, redirect to a specific page (e.g., home) or return an error response
        return redirect()->route('home'); // or abort(403, 'Unauthorized');
    }
}

