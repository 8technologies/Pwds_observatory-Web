<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserHasProfileMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        $has_profile = \App\Models\Profile::where('user_id', $user->id);
        if($has_profile->count() != 1){
            return redirect()->route("profile")->with('info', 'Complete user profile to continue');
        }

        return $next($request);
    }
}
