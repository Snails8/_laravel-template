<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

/**
 * ログイン処理
 * Class LoginController
 * @package App\Http\Controllers\Admin\Auth
 */
class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME_ADMIN;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * ログインフォームの表示
     * @Method GET
     * @return View
     */
    public function showLoginForm(): View
    {
        return view('admin.auth.login');
    }

    /**
     * logout
     * @param Request $request
     * @return mixed
     */
    public function logout(Request $request): Redirector
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return $this->loggedOut($request) ?: $this->redirect('/admin/login');
    }

    /**
     * Authに入る前にguardの上書き(管理画面用のguard指定
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
