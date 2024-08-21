<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('administrator.login');
    }

    public function store(Request $request)
    {
        // 許可するIDとパスワードのリスト（ここでは例として配列を使用）
        $allowedCredentials = [
            ['id' => 'ad1', 'password' => 'p'],
            ['id' => 'ad2', 'password' => 'p'],
            // 必要に応じて追加
        ];

        // リクエストからIDとパスワードを取得
        $inputId = $request->input('id');
        $inputPassword = $request->input('password');

        // 許可されたIDとパスワードのチェック
        foreach ($allowedCredentials as $credentials) {
            if ($inputId === $credentials['id'] && $inputPassword === $credentials['password']) {
                // 認証成功
                Auth::loginUsingId($inputId);
                return redirect()->to("http://localhost/notifications/"); // 認証後のリダイレクト先
            }
        }

        // 認証失敗
        throw ValidationException::withMessages([
            'id' => __('The provided credentials are incorrect.'),
        ]);
    }
    
    /**
     * Handle an incoming authentication request.
     */
    // public function store(LoginRequest $request): RedirectResponse
    // {
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     session()->flash('success', 'ログインしました!');

    //     return redirect()->intended(RouteServiceProvider::HOME);
    // }

    // /**
    //  * Destroy an authenticated session.
    //  */
    // public function destroy(Request $request): RedirectResponse
    // {
    //     Auth::guard('web')->logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     session()->flash('success', 'ログアウトしました!');

    //     return redirect('/');
    // }
}
