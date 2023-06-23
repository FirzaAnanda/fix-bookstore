<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $rules): Response
    {
        if(!Auth::check()){
            return redirect('user/login');
        }

        $user = Auth::user();
        if($user->role == $rules)
        return $next($request);

        return redirect('user/login')->with('Error', 'No Access');
    }
}