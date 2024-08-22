<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class Auth_editor
{
    public function handle($request, Closure $next)
    {
        // セッションにログインフラグが存在しない場合、ログインページにリダイレクト
        if (Session::get('login_flag') !== true) {
            return redirect('login');
        }
        return $next($request);
    }
}
