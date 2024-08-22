<?php

namespace App\Http\Controllers\editor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Editor;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View|RedirectResponse
    {
        if (Session::get('login_flag') === true) {
            return redirect()->to('/edit');
        }
        $editors = Editor::all();
        return view('editor.login', ['editors'=>$editors]);
    }

    public function store(Request $request)
    {
        // リクエストからIDとパスワードを取得
        $inputId = $request->input('id');
        $inputPassword = $request->input('password');

        // 許可されたIDとパスワードのチェック
        $editor = Editor::where('editor_id', $inputId)->first();

        if ($editor && $inputPassword === $editor->password) {
            // 認証成功。フラグ生成
            Session::put('login_flag', true);

            // 成功メッセージを設定してリダイレクト
            return redirect()->route('select')->with('success', '管理者ログインしたで');
        }
    }

    public function destroy(Request $request)
    {
        Session::put('login_flag', false);

        return redirect()->to('/');
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
