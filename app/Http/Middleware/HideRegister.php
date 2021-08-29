<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

// Load Models
use App\Models\User;
class HideRegister
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
        $user = User::all()->count();
        if($user == 0)
        {
            return $next($request);
        }


        return redirect()->back();
    }
}
