<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
       //dd($request);
        if(Auth::check() && Auth::user()->role == $role)
        {
            return $next($request);
        }
        // return redirect('/login')->with('success', 'ยืนยันตัวตนสำเร็จ.');
        // return response()->json(["/login"]);
        // return response()->json(["url" => "/login"]);

         return response()->json(["You don't have permission to access this page"]);
    }
}
