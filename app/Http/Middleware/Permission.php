<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Permission
{
    public function handle(Request $request, Closure $next, $types)
    {
        foreach (explode('|', $types) as $type)
        {
            if($type == Auth::user()->getRawOriginal("type"))
            {
                return $next($request);
            }
        }

        return abort(404);
    }
}
