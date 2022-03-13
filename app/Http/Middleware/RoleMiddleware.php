<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = auth()->user(); //mengecek login

        //role user = role di middleware
        if (in_array($user->role->name, $roles)) {
            // jika iya
            return $next($request); //untuk menlanjutkan yang dituju
        }

        //jika tidak
        return redirect()->route('login'); //kembali ke login
    }
}
