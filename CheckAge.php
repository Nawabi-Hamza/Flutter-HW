<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    public function handle(Request $request, Closure $next): Response
    {
        // get age from request (URL parameter or query)
        $age = $request->age;

        if ($age < 18) {
            return response("Access denied", 403);
        }

        return $next($request);
    }
}
