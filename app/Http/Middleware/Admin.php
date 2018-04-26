<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //kiemtra login
        if(Auth::check()) {
            $user = Auth::user();
            //kiem tra quyen
            if($user->role == 1) {
                return $next($request);
            }
            else 
            return redirect('/admin')->with('Tài khoản hoặc mật khẩu sai, vui lòng kiểm tra lại');
        }
        else 
            return redirect('/admin')->with('Tài khoản hoặc mật khẩu sai, vui lòng kiểm tra lại');
    }
}
